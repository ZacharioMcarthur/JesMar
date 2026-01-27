<?php

if (!function_exists('csp_nonce')) {
    /**
     * Generate a CSP nonce for Content Security Policy
     *
     * @return string
     */
    function csp_nonce(): string
    {
        if (!session()->has('csp_nonce')) {
            session(['csp_nonce' => base64_encode(random_bytes(16))]);
        }
        
        return session('csp_nonce');
    }
}

