<?php
// A simple health check endpoint
if ($_SERVER['REQUEST_URI'] === '/health') {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'OK', 'service' => 'Project Phoenix API']);
    exit;
}

// A metrics endpoint for Prometheus
if ($_SERVER['REQUEST_URI'] === '/metrics') {
    header('Content-Type: text/plain');
    
    // Dynamic metrics that change with each request
    $requests_total = file_get_contents('/tmp/request_count.txt') ?: 0;
    $requests_total++;
    file_put_contents('/tmp/request_count.txt', $requests_total);
    
    $memory_usage = memory_get_usage(true);
    $cpu_usage = sys_getloadavg()[0] * 100; // Simulated CPU usage
    $response_time = rand(50, 200); // Simulated response time in ms
    $active_users = rand(5, 50); // Simulated active users
    
    echo "# HELP php_requests_total Total number of requests\n";
    echo "# TYPE php_requests_total counter\n";
    echo "php_requests_total " . $requests_total . "\n";
    
    echo "# HELP php_memory_usage_bytes Memory usage in bytes\n";
    echo "# TYPE php_memory_usage_bytes gauge\n";
    echo "php_memory_usage_bytes " . $memory_usage . "\n";
    
    echo "# HELP php_cpu_usage_percent CPU usage percentage\n";
    echo "# TYPE php_cpu_usage_percent gauge\n";
    echo "php_cpu_usage_percent " . $cpu_usage . "\n";
    
    echo "# HELP php_response_time_ms HTTP response time in milliseconds\n";
    echo "# TYPE php_response_time_ms gauge\n";
    echo "php_response_time_ms " . $response_time . "\n";
    
    echo "# HELP php_active_users Current active users\n";
    echo "# TYPE php_active_users gauge\n";
    echo "php_active_users " . $active_users . "\n";
    
    echo "# HELP php_info PHP application information\n";
    echo "# TYPE php_info gauge\n";
    echo 'php_info{version="1.0",app="project-phoenix",environment="production"} 1' . "\n";
    exit;
}

// A simple main page
echo "<h1>🚀 Project Phoenix - DevOps Portfolio</h1>";
echo "<p>This application demonstrates complete DevOps implementation including:</p>";
echo "<ul>";
echo "<li>🐳 Docker Containerization</li>";
echo "<li>⚙️ Kubernetes Orchestration</li>";
echo "<li>📦 Helm Packaging</li>";
echo "<li>⚡ CI/CD Pipelines</li>";
echo "<li>📊 Prometheus & Grafana Monitoring</li>";
echo "<li>🏗️ Infrastructure as Code</li>";
echo "</ul>";
echo "<p>Current time is: " . date('Y-m-d H:i:s') . "</p>";
echo "<p>Hostname: " . gethostname() . "</p>";
echo '<p><a href="/metrics">📈 View Live Metrics (Prometheus format)</a></p>';
echo '<p><a href="/health">❤️ Health Check Endpoint</a></p>';
?>