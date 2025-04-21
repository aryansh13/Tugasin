# Deploying to Netlify

Since Laravel is a PHP framework and Netlify primarily hosts static sites, we need to take a hybrid approach for deployment.

## Option 1: Deploy Static Version (Recommended for Landing Page)

This approach works best for simple landing pages without complex backend functionality:

1. **Prepare Your Repository**:
   - Make sure your code is committed to a Git repository (GitHub, GitLab, or Bitbucket)

2. **Sign up for Netlify**:
   - Go to https://www.netlify.com/ and sign up for a free account
   - Connect your Git repository

3. **Configure Build Settings**:
   - Build command: `npm run build`
   - Publish directory: `public`

4. **Export Static HTML (Manual Step)**:
   - Run your Laravel site locally: `php artisan serve`
   - Use a browser to visit the site
   - Save the HTML page (Right-click > Save As...)
   - Rename the saved file to `index.html` and place it in the `public` folder
   - Also copy your CSS, JavaScript, and images to the public folder

5. **Deploy on Netlify**:
   - Commit and push your changes
   - Netlify will build and deploy your site

## Option 2: Use a Hosting Provider with PHP Support

For a fully functional Laravel application, consider these alternatives:

1. **Shared Hosting**:
   - Hostinger, NameCheap, or other PHP hosting providers
   - Upload via FTP or Git deployment

2. **PaaS Solutions**:
   - Laravel Forge + DigitalOcean
   - Heroku (with PHP buildpack)
   - Platform.sh

3. **Laravel-Specific Hosting**:
   - Laravel Vapor (AWS Lambda)
   - Fortrabbit

## Important Notes

- The Netlify approach only works for the front-end aspects of your site
- Dynamic features like form processing will require additional setup:
  - Use Netlify Forms for simple contact forms
  - Set up serverless functions for more complex features
  - Consider using a separate API backend hosted elsewhere

For this project, since it's primarily a landing page with a WhatsApp contact form, the static site approach should work well. 