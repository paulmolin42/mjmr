# config valid only for current version of Capistrano
lock '3.4.0'

set :application, 'mjmr'
set :repo_url, 'git@github.com:paulmolin42/mjmr.git'

set :tmp_dir, '/var/www/tmp'
set :deploy_to, '/var/www/mjmr'

set :linked_files, ['app/config/parameters.yml']
set :linked_dirs, [fetch(:log_path), 'web/images']

after 'deploy:updated', 'npm:install'