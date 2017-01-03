# -*- mode: ruby -*-
# vi: set ft=ruby :

require 'yaml'

current_dir    = File.dirname(File.expand_path(__FILE__))
configs        = YAML.load_file("#{current_dir}/config.yaml")
vagrant_config = configs['configs']

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: vagrant_config['private_ip']
    config.vm.hostname = vagrant_config['hostname']
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=777"]

    # Optional NFS. Make sure to remove other synced_folder line too
    #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

    # Run a script
     config.vm.provision :shell do |shell|
        shell.path = "bootstrap.sh"
        shell.args = [
                        vagrant_config['PACKAGE_JSON_FILE'],
                        vagrant_config['DIRECTORY_VENDOR'],
                        vagrant_config['DUMP_DIR'],
                        vagrant_config['MAIN_DB'],
                        vagrant_config['PASSWD_DB'],
                        vagrant_config['HAS_MIGRATE'],
                        vagrant_config['hostname']
                     ]
     end

   # Show mesage on finish
   config.vm.provision "shell", privileged: false, run: 'always', inline: <<-EOF
     echo "Agora sim, Vagrant no ar! #semProblemasDeAmbiente #MAC #Linux #Windows"
   EOF
   config.vm.post_up_message = "Acesse pelo browser através do IP: " + vagrant_config['private_ip'] + " e se divirta!"

end