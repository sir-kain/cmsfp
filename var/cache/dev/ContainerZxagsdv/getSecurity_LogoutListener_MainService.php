<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.logout_listener.main' shared service.

$a = ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load(__DIR__.'/getSecurity_HttpUtilsService.php')) && false ?: '_'};

$this->services['security.logout_listener.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\LogoutListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, 'fos_user_security_login'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'fos_user_security_logout'));

$instance->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
$instance->addHandler(${($_ = isset($this->services['security.authentication.rememberme.services.simplehash.main']) ? $this->services['security.authentication.rememberme.services.simplehash.main'] : $this->load(__DIR__.'/getSecurity_Authentication_Rememberme_Services_Simplehash_MainService.php')) && false ?: '_'});

return $instance;
