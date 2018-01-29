# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  
   config.vm.box = "ubuntu/xenial64"
 
   #Nginx1
   
   config.vm.define "nginx2" do |app|
   app.vm.hostname = "nginx2"
   app.vm.network "private_network", ip: "192.168.33.12"
   app.vm.provision "shell", path: "provision/provision_nginx.sh"
   end
 
   #Nginx2
   
   config.vm.define "nginx1" do |app|
     app.vm.hostname = "nginx1"
     app.vm.network "private_network", ip: "192.168.33.11"
     app.vm.provision "shell", path: "provision/provision_nginx.sh"
   end
 
   # Load Balancer
   config.vm.define "nginxbalancer" do |app|
     app.vm.hostname = "nginxbalancer"
     app.vm.network "private_network", ip: "192.168.33.10"
     app.vm.provision "shell", path: "provision/provision_nginx_balancer.sh"
   end
   
 end