# 🚀 Project Phoenix - DevOps Implementation

<div align="center">

[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![Kubernetes](https://img.shields.io/badge/Kubernetes-326CE5?logo=kubernetes&logoColor=white)](https://kubernetes.io/)
[![Docker](https://img.shields.io/badge/Docker-2496ED?logo=docker&logoColor=white)](https://www.docker.com/)
[![Helm](https://img.shields.io/badge/Helm-0F1689?logo=helm&logoColor=white)](https://helm.sh/)
[![Grafana](https://img.shields.io/badge/Grafana-F46800?logo=grafana&logoColor=white)](https://grafana.com/)
[![Terraform](https://img.shields.io/badge/Terraform-7B42BC?logo=terraform&logoColor=white)](https://www.terraform.io/)

**A comprehensive DevOps implementation showcasing end-to-end infrastructure automation, container orchestration, and production monitoring.**

### 🎯 Quick Links

👉 **[View Live Production Monitoring Dashboard](https://ameralmohammad.grafana.net/public-dashboards/1af1bae929824d0690d3ff4abf016a7a)**

👉 **[View Project Portfolio Dashboard](https://htmlpreview.github.io/?https://github.com/AJ-Almohammad/DevOps-Project/blob/main/portfolio-dashboard.html)**

---

[🐛 Report Bug](https://github.com/AJ-Almohammad/project-phoenix-devops/issues) • [✨ Request Feature](https://github.com/AJ-Almohammad/project-phoenix-devops/issues)

</div>

---

## 📑 Table of Contents

- [About The Project](#about-the-project)
- [Built With](#built-with)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Implementation Guide](#implementation-guide)
- [Project Structure](#project-structure)
- [Monitoring & Observability](#monitoring--observability)
- [CI/CD Pipeline](#cicd-pipeline)
- [Troubleshooting](#troubleshooting)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)
- [Acknowledgments](#acknowledgments)

---

## 🎯 About The Project

Project Phoenix demonstrates a complete DevOps workflow, from application containerization to production monitoring. This project serves as a practical reference for implementing modern DevOps practices and cloud-native technologies.

### ✨ Key Features

- 🐳 **Containerization** - Dockerized PHP application with health checks
- ⚙️ **Orchestration** - Kubernetes deployment with service discovery
- 📦 **Package Management** - Helm charts for simplified deployments
- 🔄 **CI/CD** - Automated GitLab pipeline for testing and deployment
- 📊 **Monitoring** - Prometheus metrics with Grafana Cloud integration
- 🏗️ **Infrastructure as Code** - Terraform and Ansible automation
- 🔒 **Best Practices** - Security, scalability, and maintainability

---

## 🛠️ Built With

<table>
<tr>
<td align="center" width="96">
<img src="https://raw.githubusercontent.com/docker-library/docs/c350af05d3fac7b5c3f6327ac82fe4d990d8729c/docker/logo.png" width="48" height="48" alt="Docker" />
<br>Docker
</td>
<td align="center" width="96">
<img src="https://raw.githubusercontent.com/kubernetes/kubernetes/master/logo/logo.png" width="48" height="48" alt="Kubernetes" />
<br>Kubernetes
</td>
<td align="center" width="96">
<img src="https://helm.sh/img/helm.svg" width="48" height="48" alt="Helm" />
<br>Helm
</td>
<td align="center" width="96">
<img src="https://about.gitlab.com/images/press/logo/png/gitlab-icon-rgb.png" width="48" height="48" alt="GitLab" />
<br>GitLab CI
</td>
<td align="center" width="96">
<img src="https://grafana.com/static/assets/img/blog/grafana_icon.svg" width="48" height="48" alt="Grafana" />
<br>Grafana
</td>
</tr>
<tr>
<td align="center" width="96">
<img src="https://www.vectorlogo.zone/logos/terraformio/terraformio-icon.svg" width="48" height="48" alt="Terraform" />
<br>Terraform
</td>
<td align="center" width="96">
<img src="https://www.vectorlogo.zone/logos/ansible/ansible-icon.svg" width="48" height="48" alt="Ansible" />
<br>Ansible
</td>
<td align="center" width="96">
<img src="https://www.vectorlogo.zone/logos/prometheusio/prometheusio-icon.svg" width="48" height="48" alt="Prometheus" />
<br>Prometheus
</td>
<td align="center" width="96">
<img src="https://www.php.net/images/logos/new-php-logo.svg" width="48" height="48" alt="PHP" />
<br>PHP
</td>
<td align="center" width="96">
<img src="https://www.vectorlogo.zone/logos/apache/apache-icon.svg" width="48" height="48" alt="Apache" />
<br>Apache
</td>
</tr>
</table>

---

## 🚀 Getting Started

### Prerequisites

Before you begin, ensure you have the following installed:

- **Docker Desktop** (v20.10+) - [Download](https://www.docker.com/products/docker-desktop)
- **Kubernetes** - Enable in Docker Desktop or use Minikube
- **kubectl** (v1.20+) - [Installation Guide](https://kubernetes.io/docs/tasks/tools/)
- **Helm** (v3.0+) - [Installation Guide](https://helm.sh/docs/intro/install/)
- **Git** - [Download](https://git-scm.com/downloads)

### Installation

1. **Clone the repository**

```bash
git clone https://github.com/AJ-Almohammad/project-phoenix-devops.git
cd project-phoenix-devops
```

2. **Verify prerequisites**

```bash
docker --version
kubectl version --client
helm version
```

3. **Enable Kubernetes**

```bash
# For Minikube users
minikube start

# For Docker Desktop users
# Enable Kubernetes in Docker Desktop settings
```

---

## 📚 Implementation Guide

### 🔧 Phase 1: Application Containerization

#### Step 1: Create PHP Application with Metrics

```bash
# View and create the application file
cat > index.php
```

**👉 [View index.php content](index.php)**

#### Step 2: Create Apache Configuration

```bash
# Create Apache virtual host configuration
cat > 000-default.conf
```

**👉 [View 000-default.conf content](000-default.conf)**

#### Step 3: Create Docker Configuration

```bash
# Create Dockerfile for containerization
cat > Dockerfile
```

**👉 [View Dockerfile content](Dockerfile)**

#### Step 4: Build and Test Docker Image

```bash
# Build the Docker image
docker build -t project-phoenix:latest .

# Test the container locally
docker run -d -p 8080:80 --name phoenix-test project-phoenix:latest

# Verify endpoints
curl http://localhost:8080/health
curl http://localhost:8080/metrics

# Cleanup test container
docker stop phoenix-test
docker rm phoenix-test
```

**Expected Output:**
```json
{"status":"healthy","timestamp":"2025-09-29T12:00:00Z"}
```

**Troubleshooting:**
- If curl fails: `docker logs phoenix-test`
- If metrics return 404: Verify .htaccess file is copied correctly

---

### 🔧 Phase 2: Kubernetes Deployment

#### Step 5: Enable Kubernetes

```bash
# Enable Kubernetes in Docker Desktop or use Minikube
minikube start
```

#### Step 6: Create Kubernetes Deployment

```bash
# Create deployment manifest
cat > deployment.yaml
```

**👉 [View deployment.yaml content](deployment.yaml)**

#### Step 7: Create Kubernetes Service

```bash
# Create service manifest
cat > service.yaml
```

**👉 [View service.yaml content](service.yaml)**

#### Step 8: Deploy to Kubernetes

```bash
# Apply Kubernetes manifests
kubectl apply -f deployment.yaml
kubectl apply -f service.yaml

# Verify deployment
kubectl get pods
kubectl get services

# Test the application
curl http://localhost:30007/health
curl http://localhost:30007/metrics
```

**Troubleshooting:**
- Pods not starting: `kubectl describe pod <pod-name>`
- Service inaccessible: Check NodePort range (30000-32767)

---

### 🔧 Phase 3: Helm Packaging

#### Step 9: Create Helm Chart Structure

```bash
# Create chart directory structure
mkdir -p charts/project-phoenix/templates
```

#### Step 10: Create Helm Chart Configuration

```bash
# Create Chart.yaml
cat > charts/project-phoenix/Chart.yaml
```

**👉 [View Chart.yaml content](charts/project-phoenix/Chart.yaml)**

#### Step 11: Create Helm Values

```bash
# Create values.yaml
cat > charts/project-phoenix/values.yaml
```

**👉 [View values.yaml content](charts/project-phoenix/values.yaml)**

#### Step 12: Create Helm Templates

```bash
# Create deployment template
cat > charts/project-phoenix/templates/deployment.yaml
```

**👉 [View deployment template](charts/project-phoenix/templates/deployment.yaml)**

```bash
# Create service template
cat > charts/project-phoenix/templates/service.yaml
```

**👉 [View service template](charts/project-phoenix/templates/service.yaml)**

#### Step 13: Deploy with Helm

```bash
# Clean up previous deployment
kubectl delete -f deployment.yaml -f service.yaml

# Install using Helm
helm install phoenix-release charts/project-phoenix

# Verify Helm deployment
helm list
kubectl get pods
```

**Troubleshooting:**
- Helm installation fails: `helm install phoenix-release . --debug`
- Resource conflicts: Delete existing resources first

---

### 🔧 Phase 4: Monitoring & Grafana Cloud

#### Step 14: Set Up Grafana Cloud

1. Create account at [grafana.com](https://grafana.com)
2. Note your Grafana instance URL and credentials
3. Generate an API token with `metrics:write` permissions

#### Step 15: Deploy Grafana Agent

```bash
# Create Grafana Agent configuration
cat > grafana-agent.yaml
```

**👉 [View grafana-agent.yaml content](grafana-agent.yaml)**

```bash
# Deploy the Grafana Agent
kubectl apply -f grafana-agent.yaml

# Check agent status
kubectl get pods -l app=grafana-agent
kubectl logs -l app=grafana-agent

# Wait 2-3 minutes for metrics to appear in Grafana Cloud
```

**Troubleshooting:**
- 401 authentication errors: Verify Grafana Cloud credentials
- No metrics flowing: Check service name and network connectivity

#### Step 16: Import Grafana Dashboard

```bash
# Create Grafana dashboard configuration
cat > grafana-dashboard.json
```

**👉 [View grafana-dashboard.json content](grafana-dashboard.json)**

**Import Steps:**
1. Navigate to Grafana Cloud
2. Go to Dashboards → Import
3. Upload `grafana-dashboard.json`
4. Configure data source
5. Save and view

---

### 🔧 Phase 5: Infrastructure as Code

#### Step 17: Create Terraform Configuration

```bash
# Create main Terraform configuration
cat > terraform/main.tf
```

**👉 [View main.tf content](terraform/main.tf)**

```bash
# Create Terraform variables
cat > terraform/variables.tf
```

**👉 [View variables.tf content](terraform/variables.tf)**

#### Step 18: Create Ansible Playbook

```bash
# Create Ansible automation playbook
cat > ansible-playbook.yml
```

**👉 [View ansible-playbook.yml content](ansible-playbook.yml)**

---

### 🔧 Phase 6: CI/CD Pipeline

#### Step 19: Create CI/CD Configuration

```bash
# Create GitLab CI pipeline (if using GitLab)
cat > .gitlab-ci.yml
```

**👉 [View .gitlab-ci.yml content](.gitlab-ci.yml)** *(Optional - for GitLab users)*

---

### 🎯 Final Verification

#### Step 20: Verify Complete Setup

```bash
# Check all Kubernetes components
kubectl get all

# Verify Helm release
helm list

# Test application endpoints
curl http://localhost:30007/health
curl http://localhost:30007/metrics

# Monitor Grafana Agent
kubectl logs -l app=grafana-agent

# Access your live dashboard
echo "Live Dashboard: https://your-username.grafana.net/d/your-dashboard-uid"
```

---

## 📁 Project Structure

```
project-phoenix/
├── 📄 README.md                       # Project documentation
├── 📄 index.php                       # PHP application with metrics
├── 📄 Dockerfile                      # Container image definition
├── 📄 000-default.conf                # Apache configuration
├── 📄 deployment.yaml                 # Kubernetes deployment
├── 📄 service.yaml                    # Kubernetes service
│
├── 📁 charts/                         # Helm charts
│   └── project-phoenix/
│       ├── Chart.yaml                 # Chart metadata
│       ├── values.yaml                # Default values
│       └── templates/                 # K8s templates
│           ├── deployment.yaml
│           └── service.yaml
│
├── 📄 grafana-agent.yaml              # Metrics forwarding agent
├── 📄 grafana-agent-deployment.yaml   # Alternative agent config
├── 📄 grafana-dashboard.json          # Dashboard template
├── 📄 phoenix-dashboard-fixed.json    # Fixed dashboard version
├── 📄 portfolio-dashboard.html        # Project showcase page
│
├── 📁 terraform/                      # Infrastructure as Code
│   ├── main.tf                        # Terraform main config
│   └── variables.tf                   # Terraform variables
│
└── 📄 ansible-playbook.yml            # Configuration automation
```

---

## 📊 Monitoring & Observability

### Metrics Exposed

The application exposes the following Prometheus metrics at `/metrics`:

| Metric | Type | Description |
|--------|------|-------------|
| `app_requests_total` | Counter | Total number of requests |
| `app_request_duration_seconds` | Histogram | Request duration in seconds |
| `app_memory_usage_bytes` | Gauge | Current memory usage |
| `app_cpu_usage_percent` | Gauge | CPU usage percentage |
| `app_uptime_seconds` | Counter | Application uptime |

### Accessing Metrics

```bash
# Local metrics endpoint
curl http://localhost:30007/metrics

# From within cluster
kubectl exec -it deployment/project-phoenix -- curl http://localhost/metrics
```

### Grafana Dashboard Features

- **Real-time Metrics** - Live application performance data
- **Request Rate** - Requests per second visualization
- **Response Time** - P50, P95, P99 latency percentiles
- **Resource Usage** - CPU and memory consumption
- **Health Status** - Application availability monitoring

**👉 [View Dashboard Demo Video](grafana-dashboard.mp4)**

---

## 🔄 CI/CD Pipeline

### Pipeline Stages

The automated pipeline includes:

1. **Build Stage** - Docker image creation
2. **Test Stage** - Automated testing
3. **Security Scan** - Vulnerability checking
4. **Push Stage** - Image registry upload
5. **Deploy Stage** - Kubernetes deployment
6. **Verify Stage** - Health checks

### Triggering a Pipeline

```bash
# Push to main branch
git add .
git commit -m "Update application"
git push origin main
```

---

## 🐛 Troubleshooting

### Common Issues

<details>
<summary><strong>🔴 Docker Build Fails</strong></summary>

**Issue:** Permission denied or missing files

**Solution:**
```bash
# Check file permissions
ls -la

# Rebuild with no cache
docker build --no-cache -t project-phoenix:latest .

# Verify all files are present
cat Dockerfile
cat index.php
```
</details>

<details>
<summary><strong>🔴 Pods in CrashLoopBackOff</strong></summary>

**Issue:** Container keeps restarting

**Solution:**
```bash
# Check pod logs
kubectl describe pod <pod-name>
kubectl logs <pod-name>

# Check events
kubectl get events --sort-by=.metadata.creationTimestamp

# Verify image exists
docker images | grep project-phoenix
```
</details>

<details>
<summary><strong>🔴 Grafana Agent Authentication Failed</strong></summary>

**Issue:** 401 errors in agent logs

**Solution:**
- Verify Grafana Cloud credentials in `grafana-agent.yaml`
- Ensure API token has `metrics:write` permissions
- Check endpoint URL format (must include protocol)
- Regenerate token if expired
</details>

<details>
<summary><strong>🔴 No Data in Grafana Dashboard</strong></summary>

**Issue:** Metrics not appearing in Grafana

**Solution:**
```bash
# Test metrics endpoint
kubectl exec -it deployment/project-phoenix -- curl http://localhost/metrics

# Check agent logs
kubectl logs -l app=grafana-agent -f

# Verify service discovery
kubectl get endpoints project-phoenix-service

# Check agent configuration
kubectl describe configmap grafana-agent-config
```
</details>

<details>
<summary><strong>🔴 NodePort Service Not Accessible</strong></summary>

**Issue:** Cannot access http://localhost:30007

**Solution:**
```bash
# Check service status
kubectl get svc project-phoenix-service

# Verify NodePort is in valid range (30000-32767)
kubectl describe svc project-phoenix-service

# For Minikube users
minikube service project-phoenix-service --url
```
</details>

---

## ✅ Success Checklist

- [ ] Application accessible at `http://localhost:30007`
- [ ] Health endpoint returns `{"status":"healthy"}`
- [ ] Metrics endpoint returns Prometheus format data
- [ ] All Kubernetes pods in `Running` state
- [ ] Helm release installed successfully (`helm list`)
- [ ] Grafana Agent pod running without errors
- [ ] Metrics appearing in Grafana Cloud (wait 2-3 minutes)
- [ ] Dashboard displaying real-time data
- [ ] All files present in repository structure

---

## 🤝 Contributing

Contributions are what make the open source community amazing! Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📄 License

Distributed under the MIT License. See `LICENSE` file for more information.

---

## 👨‍💻 Contact

**Amer Almohammad** - Junior Cloud Engineer

[![Email](https://img.shields.io/badge/Email-ajaber1973%40web.de-red?style=flat-square&logo=gmail)](mailto:ajaber1973@web.de)
[![GitHub](https://img.shields.io/badge/GitHub-AJ--Almohammad-181717?style=flat-square&logo=github)](https://github.com/AJ-Almohammad)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Connect-0077B5?style=flat-square&logo=linkedin)](https://linkedin.com/in/your-profile)

**Project Link:** [https://github.com/AJ-Almohammad/project-phoenix-devops](https://github.com/AJ-Almohammad/project-phoenix-devops)

---

## 🙏 Acknowledgments

- [Kubernetes Documentation](https://kubernetes.io/docs/)
- [Helm Charts Best Practices](https://helm.sh/docs/chart_best_practices/)
- [Grafana Cloud](https://grafana.com/products/cloud/)
- [Docker Documentation](https://docs.docker.com/)
- [Prometheus Metrics](https://prometheus.io/docs/introduction/overview/)
- [Shields.io](https://shields.io) - For the awesome badges

---

<div align="center">

**⭐ Star this repository if you find it helpful!**

Made with ❤️ by Amer Almohammad

</div>
