<?php include_once('header.php'); ?>
<main class="py-12 px-6">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-12 motion-fade">
      <h2 class="text-4xl font-bold mb-4">My Projects</h2>
      <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
        A collection of cloud infrastructure, DevOps automation, and software development projects showcasing my technical expertise.
      </p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Project 1: 3-Tier AWS Architecture -->
      <article class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-lift motion-fade">
        <div class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center">
          <span class="text-white text-6xl">🏗️</span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-3">3-Tier AWS Architecture</h3>
          <p class="text-gray-600 dark:text-gray-300 mb-4">
            Scalable and secure 3-tier architecture deployed on AWS using Terraform. Features VPC with public/private subnets, ECS Fargate for containerized applications, and RDS Multi-AZ for high availability.
          </p>
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-sm">Terraform</span>
            <span class="bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 px-2 py-1 rounded text-sm">AWS</span>
            <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-2 py-1 rounded text-sm">ECS</span>
            <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-sm">RDS</span>
          </div>
          <div class="flex space-x-3">
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Live Demo</a>
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">GitHub</a>
          </div>
        </div>
      </article>
      <!-- Project 2: Docker Voting App -->
      <article class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-lift motion-fade">
        <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center">
          <span class="text-white text-6xl">🗳️</span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-3">Microservices Voting App</h3>
          <p class="text-gray-600 dark:text-gray-300 mb-4">
            Multi-language microservices application with Python Flask frontend, Node.js API, .NET worker service, Redis cache, and PostgreSQL database. Fully containerized with Docker Compose.
          </p>
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-sm">Docker</span>
            <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-2 py-1 rounded text-sm">Python</span>
            <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-sm">Node.js</span>
            <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-2 py-1 rounded text-sm">.NET</span>
          </div>
          <div class="flex space-x-3">
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Live Demo</a>
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">GitHub</a>
          </div>
        </div>
      </article>
      <!-- Project 3: CI/CD Pipeline -->
      <article class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-lift motion-fade">
        <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center">
          <span class="text-white text-6xl">⚙️</span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-3">CI/CD Pipeline Automation</h3>
          <p class="text-gray-600 dark:text-gray-300 mb-4">
            Automated deployment pipeline using GitHub Actions for continuous integration and deployment to AWS Elastic Beanstalk. Includes automated testing, security scanning, and rollback capabilities.
          </p>
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-2 py-1 rounded text-sm">GitHub Actions</span>
            <span class="bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 px-2 py-1 rounded text-sm">AWS</span>
            <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-sm">CI/CD</span>
          </div>
          <div class="flex space-x-3">
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Documentation</a>
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">GitHub</a>
          </div>
        </div>
      </article>
      <!-- Project 4: Kubernetes Cluster -->
      <article class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-lift motion-fade">
        <div class="h-48 bg-gradient-to-br from-red-500 to-orange-600 flex items-center justify-center">
          <span class="text-white text-6xl">☸️</span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-3">Kubernetes Cluster Setup</h3>
          <p class="text-gray-600 dark:text-gray-300 mb-4">
            Production-ready Kubernetes cluster on AWS EKS with automated scaling, monitoring, and logging. Includes Helm charts for application deployment and ArgoCD for GitOps workflows.
          </p>
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-sm">Kubernetes</span>
            <span class="bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 px-2 py-1 rounded text-sm">AWS EKS</span>
            <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-2 py-1 rounded text-sm">Helm</span>
            <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-sm">ArgoCD</span>
          </div>
          <div class="flex space-x-3">
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Architecture</a>
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">GitHub</a>
          </div>
        </div>
      </article>
      <!-- Project 5: Infrastructure Monitoring -->
      <article class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-lift motion-fade">
        <div class="h-48 bg-gradient-to-br from-teal-500 to-cyan-600 flex items-center justify-center">
          <span class="text-white text-6xl">📊</span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-3">Infrastructure Monitoring Stack</h3>
          <p class="text-gray-600 dark:text-gray-300 mb-4">
            Comprehensive monitoring solution using Prometheus, Grafana, and AlertManager. Includes custom dashboards, automated alerting, and log aggregation with ELK stack.
          </p>
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-2 py-1 rounded text-sm">Prometheus</span>
            <span class="bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 px-2 py-1 rounded text-sm">Grafana</span>
            <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-2 py-1 rounded text-sm">ELK Stack</span>
          </div>
          <div class="flex space-x-3">
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Dashboards</a>
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">GitHub</a>
          </div>
        </div>
      </article>
      <!-- Project 6: Serverless API -->
      <article class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-lift motion-fade">
        <div class="h-48 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
          <span class="text-white text-6xl">⚡</span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-3">Serverless REST API</h3>
          <p class="text-gray-600 dark:text-gray-300 mb-4">
            Scalable serverless API built with AWS Lambda, API Gateway, and DynamoDB. Features JWT authentication, rate limiting, and automated deployment with SAM framework.
          </p>
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 px-2 py-1 rounded text-sm">AWS Lambda</span>
            <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-sm">API Gateway</span>
            <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-sm">DynamoDB</span>
            <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-2 py-1 rounded text-sm">SAM</span>
          </div>
          <div class="flex space-x-3">
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">API Docs</a>
            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">GitHub</a>
          </div>
        </div>
      </article>
    </div>
    <!-- Call to Action -->
    <div class="text-center mt-16 motion-fade">
      <h3 class="text-2xl font-bold mb-4">Interested in My Work?</h3>
      <p class="text-gray-600 dark:text-gray-300 mb-6">
        Let's discuss how I can help with your next cloud infrastructure or DevOps project.
      </p>
      <a href="index.php#contact" class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg transition-colors">
        Get In Touch
      </a>
    </div>
  </div>
</main>
<?php include_once('footer.php'); ?>
