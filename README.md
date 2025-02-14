# PHP strpos() Loose Comparison Bug

This repository demonstrates a subtle bug in PHP code involving the `strpos()` function and loose comparison. The issue arises when checking if a needle exists within a haystack using `strpos($haystack, $needle) == 0`. Because `strpos()` returns `false` when the needle is not found, and `false` loosely compares to 0, the comparison yields `true` even when the needle is absent, leading to unexpected behavior.

The `bug.php` file showcases the buggy code. The `bugSolution.php` file provides the corrected version using strict comparison (`===`) to avoid this issue.  See the comments in each file for further explanation.