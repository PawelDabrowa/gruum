<?php

/**
 * Disable XMLRPC to avoid vulnerabilities
 */
add_filter('xmlrpc_enabled', '__return_false');
