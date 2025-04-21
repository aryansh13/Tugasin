# Deploying Tugasin to Vercel

This guide explains how to deploy your Tugasin landing page to Vercel.

## What is Vercel?

Vercel is a platform for static sites and frontend frameworks, built to integrate with your headless content, commerce, or database. It provides a global edge network, deployment previews, and CI/CD support.

## Preparation Steps

1. **Create a Vercel Account**
   - Sign up at [vercel.com](https://vercel.com/)
   - You can sign up with your GitHub, GitLab, or Bitbucket account

2. **Prepare Your Repository**
   - Push your code to a Git repository (GitHub, GitLab, or Bitbucket)
   - Make sure all the files in this project are committed, including:
     - vercel.json
     - build-vercel.js
     - netlify_public/index.html (or it will be created automatically)

## Deployment Steps

### Step 1: Connect Your Repository to Vercel

1. Log in to your Vercel account
2. Click "New Project"
3. Import your Git repository
4. Select the repository you want to deploy

### Step 2: Configure Your Build Settings

The default settings should work with our configuration files, but you can verify them:

- **Framework Preset**: Other
- **Build Command**: `npm run build`
- **Output Directory**: `dist`
- **Install Command**: `npm install`

These settings are already configured in the `vercel.json` file.

### Step 3: Deploy Your Site

Click "Deploy" and wait for the deployment to complete.

## How It Works

This project is configured to generate a static version of your site for Vercel deployment:

1. The `build-vercel.js` script copies static assets from `public/` to the `dist/` directory
2. It also includes an `index.html` file with a simple landing page
3. The `vercel.json` file configures the build and deployment settings

## Updating Your Site

To update your site after making changes:

1. Make your changes to the code
2. Run `node build-vercel.js` to test the build locally
3. Commit and push your changes
4. Vercel will automatically redeploy your site

## Important Notes

- This is a static site deployment, so dynamic PHP features won't work
- The WhatsApp contact form will still work since it uses client-side JavaScript
- For full Laravel functionality, consider a PHP-capable hosting provider

## Additional Resources

- [Vercel Documentation](https://vercel.com/docs)
- [Static Site Deployment](https://vercel.com/guides/deploying-static-sites)
- [Vercel CLI](https://vercel.com/docs/cli) 