# 🚀 Professional Profile Website

[![Deployment Status](https://img.shields.io/badge/Deployment-Success-brightgreen?style=flat&logo=github-actions)](https://github.com/YOUR_USERNAME/profile-site-beanstalk-deploy/actions)
[![AWS](https://img.shields.io/badge/AWS-Elastic%20Beanstalk-FF9900?style=flat&logo=amazon-aws&logoColor=white)](https://aws.amazon.com/elasticbeanstalk/)
[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

A modern, responsive professional profile website showcasing cloud infrastructure and DevOps expertise. Built with modern web technologies and deployed on AWS Elastic Beanstalk with automated CI/CD pipeline.

## 🌐 Live Demo

**Website:** [http://Profile-site-app-env.eba-vnkknerx.eu-north-1.elasticbeanstalk.com](http://Profile-site-app-env.eba-vnkknerx.eu-north-1.elasticbeanstalk.com)

## 🛠️ Tech Stack

### Frontend
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

### Cloud & DevOps
![AWS](https://img.shields.io/badge/AWS-232F3E?style=for-the-badge&logo=amazon-aws&logoColor=white)
![Elastic Beanstalk](https://img.shields.io/badge/Elastic_Beanstalk-FF9900?style=for-the-badge&logo=amazon-aws&logoColor=white)
![GitHub Actions](https://img.shields.io/badge/GitHub_Actions-2088FF?style=for-the-badge&logo=github-actions&logoColor=white)
![S3](https://img.shields.io/badge/Amazon_S3-569A31?style=for-the-badge&logo=amazon-s3&logoColor=white)

### Development Tools
![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)
![VS Code](https://img.shields.io/badge/VS_Code-007ACC?style=for-the-badge&logo=visual-studio-code&logoColor=white)
![Snyk](https://img.shields.io/badge/Snyk-4C4A73?style=for-the-badge&logo=snyk&logoColor=white)

## ✨ Features

### 🎨 Design & UX
- **Responsive Design**: Mobile-first approach with seamless desktop experience
- **Dark/Light Theme**: Toggle between themes with localStorage persistence
- **Smooth Animations**: Intersection Observer API for scroll-triggered animations
- **Modern UI**: Clean, professional design with gradient accents
- **Accessibility**: WCAG 2.1 AA compliant with proper ARIA labels

### 🔧 Technical Features
- **Progressive Enhancement**: Works without JavaScript, enhanced with it
- **Performance Optimized**: Lazy loading, efficient CSS, minimal JavaScript
- **SEO Optimized**: Proper meta tags, structured data, semantic HTML
- **Security**: Content Security Policy, input validation, secure headers
- **Cross-browser Compatible**: Supports all modern browsers

### 📱 Sections
- **Hero**: Eye-catching introduction with call-to-action
- **About**: Professional background and expertise
- **Skills**: Technical skills organized by category
- **Projects**: Featured project showcase with technology tags
- **Contact**: Contact form with validation and social links
- **Blog**: Technical articles and insights

## 🏗️ Architecture

```
┌─────────────────┐    ┌──────────────────┐    ┌─────────────────┐
│   GitHub Repo   │───▶│  GitHub Actions  │───▶│ AWS Elastic     │
│                 │    │                  │    │ Beanstalk       │
└─────────────────┘    └──────────────────┘    └─────────────────┘
                                │                        │
                                ▼                        ▼
                       ┌──────────────────┐    ┌─────────────────┐
                       │   Snyk Security  │    │   S3 Bucket     │
                       │   Scanning       │    │   (Artifacts)   │
                       └──────────────────┘    └─────────────────┘
```

## 📁 Project Structure

```
profile-site-beanstalk-deploy/
├── index.php              # Main homepage
├── projects.php           # Projects showcase
├── blog.php               # Technical blog
├── styles.css             # Custom CSS styles
├── js/
│   ├── theme-toggle.js    # Theme switching functionality
│   └── scroll-animations.js # Scroll animations and interactions
├── .github/
│   └── workflows/
│       ├── main.yml          # CI/CD pipeline
│       └── slack-notify.yml  # Slack notifications
├── .ebextensions/         # Elastic Beanstalk configuration
├── profile.jpg            # Profile image
├── composer.json          # PHP dependencies
├── README.md              # Project documentation
```

## 🚀 Deployment Pipeline

### Automated CI/CD with GitHub Actions

```yaml
Trigger: Push to main branch
├── 1. Checkout code
├── 2. Configure AWS credentials
├── 3. Security scan with Snyk
├── 4. Package application
├── 5. Deploy to Elastic Beanstalk
└── 6. (Optional) Send Slack notifications
```

### Deployment Features
- **Automated Testing**: Security vulnerability scanning
- **Zero Downtime**: Rolling deployments
- **Version Control**: Unique version labels for each deployment
- **Rollback Capability**: Easy rollback to previous versions
- **Notifications**: Slack integration for deployment status (optional)

## 🔧 Local Development

### Prerequisites
- PHP 8+ (for local server)
- Git
- Modern web browser

### Setup
```bash
# Clone the repository
git clone https://github.com/YOUR_USERNAME/profile-site-beanstalk-deploy.git
cd profile-site-beanstalk-deploy

# Start PHP local server
php -S localhost:8000

# Open in browser
open http://localhost:8000
```

## 🌐 AWS Infrastructure

### Elastic Beanstalk Configuration
- **Platform**: PHP 8.x on Amazon Linux 2
- **Instance Type**: t3.micro (Free Tier eligible)
- **Auto Scaling**: Single instance (can be scaled)
- **Load Balancer**: Application Load Balancer (optional)
- **Health Monitoring**: Enhanced health reporting

### Security Features
- **IAM Roles**: Least privilege access
- **Security Groups**: Restricted network access
- **SSL/TLS**: HTTPS encryption
- **WAF**: Web Application Firewall (optional)

## 📊 Performance Metrics

- **Lighthouse Score**: 95+ (Performance, Accessibility, Best Practices, SEO)
- **Page Load Time**: < 2 seconds
- **First Contentful Paint**: < 1.5 seconds
- **Cumulative Layout Shift**: < 0.1

## 🔒 Security

### Implemented Security Measures
- **Content Security Policy**: Prevents XSS attacks
- **Input Validation**: Form validation and sanitization
- **HTTPS Only**: Secure connections enforced
- **Dependency Scanning**: Automated vulnerability detection
- **Access Control**: Proper IAM permissions

### Security Scanning
- **Snyk Integration**: Continuous security monitoring
- **Dependency Updates**: Automated security patches
- **Code Analysis**: Static security analysis

## 📈 Monitoring & Analytics

### Available Integrations
- **Google Analytics 4**: User behavior tracking
- **AWS CloudWatch**: Infrastructure monitoring
- **Elastic Beanstalk Health**: Application health monitoring
- **Custom Events**: Interaction tracking

## 🤝 Contributing

1. **Fork the repository**
2. **Create a feature branch**
   ```bash
   git checkout -b feature/amazing-feature
   ```
3. **Make your changes**
4. **Run tests and security checks**
   ```bash
   # (Add PHP test or security commands here if needed)
   ```
5. **Commit your changes**
   ```bash
   git commit -m 'Add amazing feature'
   ```
6. **Push to the branch**
   ```bash
   git push origin feature/amazing-feature
   ```
7. **Open a Pull Request**

## 📋 Environment Variables

### Required GitHub Secrets
```bash
AWS_ACCESS_KEY_ID=your_access_key
AWS_SECRET_ACCESS_KEY=your_secret_key
AWS_REGION=us-east-1
EB_BUCKET_NAME=your-eb-bucket-name
```

### Optional Secrets
```bash
SNYK_TOKEN=your_snyk_token          # For security scanning
SLACK_WEBHOOK_URL=your_webhook_url  # For notifications
```

## 🐛 Troubleshooting

### Common Issues

**Deployment Fails**
```bash
# Check GitHub Actions logs
# Verify AWS credentials
# Ensure Elastic Beanstalk environment is healthy
```

**Theme Toggle Not Working**
```bash
# Check browser console for JavaScript errors
# Verify localStorage is enabled
# Clear browser cache
```

**Slow Loading**
```bash
# Check image optimization
# Verify CDN configuration
# Monitor network requests
```

## 📚 Documentation

- [AWS Elastic Beanstalk Guide](https://docs.aws.amazon.com/elasticbeanstalk/)
- [GitHub Actions Documentation](https://docs.github.com/en/actions)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Web Accessibility Guidelines](https://www.w3.org/WAI/WCAG21/quickref/)

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

**Matthew Odoom Ntsiful**
- 🌐 Website: [http://Profile-site-app-env.eba-vnkknerx.eu-north-1.elasticbeanstalk.com](http://Profile-site-app-env.eba-vnkknerx.eu-north-1.elasticbeanstalk.com)
- 💼 LinkedIn: [matthew-ntsiful](https://linkedin.com/in/matthewntsiful)
- 🐙 GitHub: [matthew-ntsiful](https://github.com/matthewntsiful)
- 📧 Email: matthew.ntsiful@gmail.com

## 🙏 Acknowledgments

- **AWS** for reliable cloud infrastructure
- **GitHub** for version control and CI/CD
- **Tailwind CSS** for utility-first styling
- **Snyk** for security vulnerability scanning
- **Open Source Community** for amazing tools and libraries

---

⭐ **Star this repository if you found it helpful!**

**Powered by [Blakk Brother Inc](https://blakkbrother.com)**

Built with ❤️ using modern web technologies and deployed on AWS.