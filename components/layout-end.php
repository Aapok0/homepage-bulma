    </div>
  </div>
</section>

<?php if (!empty($pageScripts)): ?>
<?php foreach ($pageScripts as $script): ?>
<script src='<?= htmlspecialchars($script, ENT_QUOTES, 'UTF-8') ?>'></script>
<?php endforeach; ?>
<?php endif; ?>

<?php include_once __DIR__ . '/footer.php'; ?>
