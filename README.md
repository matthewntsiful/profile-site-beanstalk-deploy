# Professional Profile Site

A modern, responsive professional profile website for Matthew Odoom Ntsiful, showcasing cloud infrastructure and DevOps expertise.

## 🚀 Features

- **Modern Design**: Clean, professional layout with dark/light theme toggle
- **Responsive**: Fully responsive design that works on all devices
- **Performance**: Optimized for fast loading and smooth animations
- **Accessibility**: WCAG compliant with proper ARIA labels and keyboard navigation
- **SEO Optimized**: Proper meta tags, structured data, and semantic HTML
- **Progressive Enhancement**: Works without JavaScript, enhanced with it

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Styling**: Tailwind CSS for utility-first styling
- **Animations**: CSS transitions and Intersection Observer API
- **Deployment**: AWS Elastic Beanstalk with GitHub Actions CI/CD

## 📁 Project Structure

```
├── index.html              # Main homepage
├── projects.html           # Projects showcase
├── blog.html              # Technical blog
├── styles.css             # Custom CSS styles
├── js/
│   ├── theme-toggle.js    # Theme switching functionality
│   └── scroll-animations.js # Scroll animations and interactions
├── .github/
│   └── workflows/
│       └── main.yml       # CI/CD pipeline
└── profile.jpg           # Profile image
```

## 🎨 Design Features

### Homepage Sections
- **Hero**: Eye-catching introduction with call-to-action buttons
- **About**: Professional background and expertise overview
- **Skills**: Technical skills organized by category
- **Projects**: Featured project showcase with technology tags
- **Contact**: Contact form and social media links

### Additional Pages
- **Projects**: Detailed project portfolio with descriptions and links
- **Blog**: Technical articles and insights (placeholder content)

### Interactive Elements
- **Theme Toggle**: Persistent dark/light mode with localStorage
- **Mobile Menu**: Responsive navigation for mobile devices
- **Smooth Scrolling**: Enhanced navigation between sections
- **Scroll Animations**: Fade-in effects triggered by viewport intersection
- **Form Handling**: Contact form with validation and feedback

## 🚀 Deployment

The site is configured for deployment to AWS Elastic Beanstalk using GitHub Actions:

1. **Automatic Deployment**: Triggers on push to main branch
2. **Build Process**: Zips application files for deployment
3. **AWS Integration**: Uses AWS credentials stored in GitHub Secrets
4. **Version Control**: Each deployment gets a unique version label

### Required GitHub Secrets
- `AWS_ACCESS_KEY_ID`
- `AWS_SECRET_ACCESS_KEY`
- `AWS_REGION`
- `EB_BUCKET_NAME`

## 🔧 Local Development

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd profile-site-beanstalk-deploy
   ```

2. **Open in browser**
   - Simply open `index.html` in your browser
   - Or use a local server like Live Server in VS Code

3. **Make changes**
   - Edit HTML, CSS, or JavaScript files
   - Changes will be reflected immediately

## 📱 Browser Support

- **Modern Browsers**: Chrome, Firefox, Safari, Edge (latest versions)
- **Mobile**: iOS Safari, Chrome Mobile, Samsung Internet
- **Fallbacks**: Graceful degradation for older browsers

## ♿ Accessibility Features

- **Semantic HTML**: Proper heading hierarchy and landmarks
- **ARIA Labels**: Screen reader friendly navigation and buttons
- **Keyboard Navigation**: Full keyboard accessibility
- **Color Contrast**: WCAG AA compliant color ratios
- **Focus Management**: Visible focus indicators
- **Reduced Motion**: Respects user's motion preferences

## 🔍 SEO Optimization

- **Meta Tags**: Comprehensive meta descriptions and keywords
- **Open Graph**: Social media sharing optimization
- **Structured Data**: Schema.org markup for better search results
- **Semantic HTML**: Proper use of HTML5 semantic elements
- **Performance**: Optimized loading and Core Web Vitals

## 📊 Performance Features

- **Lazy Loading**: Images load as they enter viewport
- **Efficient CSS**: Utility-first approach with Tailwind CSS
- **Minimal JavaScript**: Lightweight, vanilla JavaScript
- **Caching**: Proper cache headers for static assets
- **Compression**: Gzip compression for text assets

## 🔒 Security

- **Content Security Policy**: Prevents XSS attacks
- **HTTPS**: Secure connection (when deployed)
- **Input Validation**: Form validation and sanitization
- **No Inline Scripts**: External JavaScript files only

## 📈 Analytics Ready

The site is prepared for analytics integration:
- Google Analytics 4 ready
- Custom event tracking for interactions
- Performance monitoring capabilities

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 📞 Contact

**Matthew Odoom Ntsiful**
- Email: matthew@example.com
- LinkedIn: [matthew-ntsiful](https://linkedin.com/in/matthew-ntsiful)
- GitHub: [matthew-ntsiful](https://github.com/matthew-ntsiful)

---

Built with ❤️ using modern web technologies and deployed on AWS.