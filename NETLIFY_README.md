# Deploying Tugasin to Netlify

This guide explains how to deploy your Tugasin landing page to Netlify.

## What is Netlify?

Netlify is a platform for hosting static websites and web applications. It offers features like continuous deployment from Git, serverless functions, and form handling.

## Preparation Steps

1. **Create a Netlify Account**
   - Sign up at [netlify.com](https://www.netlify.com/)
   - You can sign up with your GitHub, GitLab, or Bitbucket account

2. **Prepare Your Repository**
   - Push your code to a Git repository (GitHub, GitLab, or Bitbucket)
   - Make sure all the files in this project are committed

## Deployment Steps

### Step 1: Generate the Static Version of Your Site

Since Laravel is a PHP framework and Netlify doesn't run PHP, we need to create a static version of your site:

```bash
# Run your Laravel application locally
php artisan serve

# In a new terminal window, run the Netlify build script
npm run netlify:build
```

This will create a `netlify_public` directory with all your static assets.

### Step 2: Create Static HTML

Follow the detailed instructions in `STATIC_HTML_STEPS.md` to create the static HTML version of your site and place it in the `netlify_public` directory.

### Step 3: Connect Your Repository to Netlify

1. Log in to your Netlify account
2. Click "New site from Git"
3. Select your Git provider (GitHub, GitLab, or Bitbucket)
4. Authorize Netlify to access your repositories
5. Select your repository

### Step 4: Configure Your Build Settings

Use these settings in the Netlify deploy configuration:

- **Build command**: `npm run netlify:build`
- **Publish directory**: `netlify_public`

### Step 5: Deploy Your Site

Click "Deploy site" and wait for the deployment to complete.

## Updating Your Site

To update your site after making changes:

1. Make your changes to the Laravel code
2. Regenerate the static version of your site
3. Commit and push your changes
4. Netlify will automatically redeploy your site

## Important Notes

- Your WhatsApp form will continue to work because it uses client-side redirection
- Dynamic features that require PHP processing won't work in this setup
- If you need full Laravel functionality, consider a PHP hosting provider instead

## Additional Resources

- [Netlify Documentation](https://docs.netlify.com/)
- [Static Site Generators](https://www.netlify.com/blog/2020/04/14/what-is-a-static-site-generator-and-3-ways-to-find-the-best-one/)
- [Netlify Forms](https://docs.netlify.com/forms/setup/) 