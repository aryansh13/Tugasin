const fs = require('fs');
const path = require('path');

// Create dist directory if it doesn't exist
const distDir = 'dist';
if (!fs.existsSync(distDir)) {
  fs.mkdirSync(distDir);
}

// Create netlify_public directory if it doesn't exist (for compatibility)
const netlifyDir = 'netlify_public';
if (!fs.existsSync(netlifyDir)) {
  fs.mkdirSync(netlifyDir);
}

// Copy all files from public directory to dist
const publicDir = 'public';
const copyDir = (src, dest) => {
  const entries = fs.readdirSync(src, { withFileTypes: true });
  
  entries.forEach(entry => {
    const srcPath = path.join(src, entry.name);
    const destPath = path.join(dest, entry.name);
    
    if (entry.isDirectory()) {
      if (!fs.existsSync(destPath)) {
        fs.mkdirSync(destPath, { recursive: true });
      }
      copyDir(srcPath, destPath);
    } else {
      fs.copyFileSync(srcPath, destPath);
    }
  });
};

// Create the dist directory and copy public files
try {
  if (fs.existsSync(publicDir)) {
    copyDir(publicDir, distDir);
    console.log('Successfully copied public assets to dist directory');
    
    // Also copy to netlify_public for compatibility
    copyDir(publicDir, netlifyDir);
    console.log('Successfully copied public assets to netlify_public directory');
  } else {
    console.error('Public directory not found!');
    process.exit(1);
  }
} catch (err) {
  console.error('Error copying files:', err);
  process.exit(1);
}

// Copy the index.html if it exists in netlify_public
const netlifyIndexPath = path.join(netlifyDir, 'index.html');
const distIndexPath = path.join(distDir, 'index.html');

if (fs.existsSync(netlifyIndexPath)) {
  fs.copyFileSync(netlifyIndexPath, distIndexPath);
  console.log('Copied index.html from netlify_public to dist');
} else {
  // Create a redirect HTML file for both netlify_public and dist
  const indexContent = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugasin - Jasa Pengerjaan Tugas Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4F46E5;
            --secondary-color: #8B5CF6;
            --dark-color: #1F2937;
            --light-color: #F9FAFB;
        }
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .container {
            text-align: center;
            padding: 2rem;
            max-width: 600px;
        }
        h1 {
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }
        .btn-primary {
            background: white;
            color: var(--primary-color);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tugasin</h1>
        <p class="lead">Jasa Pengerjaan Tugas Mahasiswa Terpercaya</p>
        <p>Layanan kami membantu Anda menyelesaikan tugas kuliah dengan hasil berkualitas dan tepat waktu.</p>
        <a href="https://wa.me/6285225397226?text=Halo%20Tugasin%2C%20saya%20ingin%20menggunakan%20jasa%20pengerjaan%20tugas" class="btn btn-primary btn-lg">Hubungi Kami via WhatsApp</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>`;
  
  fs.writeFileSync(distIndexPath, indexContent);
  fs.writeFileSync(netlifyIndexPath, indexContent);
  console.log('Created new index.html in both netlify_public and dist directories');
}

console.log('Build completed successfully. Files are ready for deployment.') 