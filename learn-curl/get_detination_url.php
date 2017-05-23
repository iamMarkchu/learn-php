<?php
/**
 * 获取最终链接
 */

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'http://www.couponwitme.com/go/Y291cG9u%257CMTU1NDIwOTg%253D%257Cc3luYw%253D%253D%257CaHR0cCUzQSUyRiUyRnd3dy5jdXJyeXMuY28udWslMkZnYnVrJTJGc2VhcmNoLWtleXdvcmRzJTJGeHhfeHhfeHhfeHhfeHglMkYtdm91Y2hlcl9jb2RlXzUtJTJGeHgtY3JpdGVyaWEuaHRtbA%253D%253D%7CTUVSQ0hBTlQ%3D%7CL3ZvdWNoZXJzL2N1cnJ5cy8%3D%7CX19idG4%3D');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
$html = curl_exec($ch);
echo $html;
curl_close($ch);