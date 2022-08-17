<?php

/**
 * footer.php
 * フッター用コンポーネント
 * 他のPHPファイルで, get_footer() を呼び出すと, このファイルが挿入される. 
 */
?>
</div>
<footer id="footer" role="contentinfo">
    <div id="copyright">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'generic'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>