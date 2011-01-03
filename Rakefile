# Output directory.
task :server do
  require 'rubygems'
  require 'webrick'
  
  server = WEBrick::HTTPServer.new :Port => 3000, :DocumentRoot => '.'
  ['INT', 'TERM'].each { |signal| trap(signal) { server.shutdown } }
  server.start
end

# Run the server by default.
task :default => :server
