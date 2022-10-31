<?php
/**
 * CSP (Content Security Policy)
 * 
 * fell free to add your custom CSP.
 * 
 * original code by 2022 Hendro Wicaksono (hendrowicaksono@yahoo.com)
 * modified by Drajat Hasan (drajathasan20@gmail.com)
 */
return [
    "base-uri 'self'",
    "script-src 'self' 'unsafe-inline' 'unsafe-eval'",
    "style-src 'self' 'unsafe-inline'",
    "img-src 'self' data:",
    "connect-src 'self' kutipan.herokuapp.com",
    "frame-src 'self' *.google.com",
    "font-src 'self'",
    "media-src 'self'",
    "object-src 'self'",
    "manifest-src 'self'", 
    "worker-src 'self'",
    "frame-ancestors 'self'"
];