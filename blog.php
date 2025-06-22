<?php include_once('header.php'); ?>
<main class="py-12 px-6">
  <div class="max-w-4xl mx-auto">
    <div class="text-center mb-12 motion-fade">
      <h2 class="text-4xl font-bold mb-4">Blog</h2>
      <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
        Insights, tutorials, and thoughts on cloud, DevOps, and software engineering.
      </p>
    </div>
    <div class="space-y-10">
      <!-- Blog Post 1 -->
      <article class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 motion-fade">
        <h3 class="text-2xl font-bold mb-2">Getting Started with AWS CDK</h3>
        <p class="text-gray-600 dark:text-gray-300 mb-4">A hands-on guide to building cloud infrastructure as code using AWS Cloud Development Kit (CDK) with TypeScript. Learn how to define, deploy, and manage AWS resources programmatically.</p>
        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Read More</a>
      </article>
      <!-- Blog Post 2 -->
      <article class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 motion-fade">
        <h3 class="text-2xl font-bold mb-2">CI/CD for PHP Apps on AWS Elastic Beanstalk</h3>
        <p class="text-gray-600 dark:text-gray-300 mb-4">Step-by-step tutorial on setting up a robust CI/CD pipeline for PHP applications using GitHub Actions and deploying to AWS Elastic Beanstalk. Covers automated testing, security scanning, and zero-downtime deployments.</p>
        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Read More</a>
      </article>
      <!-- Blog Post 3 -->
      <article class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 motion-fade">
        <h3 class="text-2xl font-bold mb-2">Monitoring Cloud Infrastructure with Prometheus & Grafana</h3>
        <p class="text-gray-600 dark:text-gray-300 mb-4">Explore how to set up end-to-end monitoring for cloud-native environments using Prometheus and Grafana. Includes alerting, dashboard creation, and best practices for observability.</p>
        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Read More</a>
      </article>
    </div>
    <!-- Call to Action -->
    <div class="text-center mt-16 motion-fade">
      <h3 class="text-2xl font-bold mb-4">Want More Insights?</h3>
      <p class="text-gray-600 dark:text-gray-300 mb-6">
        Follow my blog for the latest updates in cloud, DevOps, and software engineering.
      </p>
      <a href="index.php#contact" class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg transition-colors">
        Contact Me
      </a>
    </div>
  </div>
</main>
<?php include_once('footer.php'); ?>
