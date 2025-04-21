const fs = require('fs');
const path = require('path');

// Create netlify_public directory if it doesn't exist
const netlifyDir = 'netlify_public';
if (!fs.existsSync(netlifyDir)) {
  fs.mkdirSync(netlifyDir);
}

// Copy all files from public directory to netlify_public
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

// Create the netlify_public directory and copy public files
try {
  if (fs.existsSync(publicDir)) {
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

// Create a README in the netlify_public directory
const readmeContent = `# Static Version of Tugasin Landing Page

This directory contains the static assets for deployment to Netlify.

To complete the deployment:
1. Add your rendered HTML from the Laravel application as index.html in this directory
2. Commit and push these changes to your Git repository
3. Connect your repository to Netlify and deploy
`;

fs.writeFileSync(path.join(netlifyDir, 'README.md'), readmeContent);
console.log('Created README in netlify_public directory');

console.log('Please create an index.html file in the netlify_public directory to complete deployment.'); 