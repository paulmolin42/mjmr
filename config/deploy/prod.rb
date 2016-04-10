server 'mjmr.fr', user: 'www-data', roles: %w{app web}

set :ssh_options, {
  keys: %w(/home/paulm/.ssh/id_rsa),
  forward_agent: true,
}
