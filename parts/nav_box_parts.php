<?php if(is_page( '2' ) ): ?>
<!-- 作品集
======================================================================================================================================== -->
                <!--▼ラップ01開始▼-->
                <div class="name-nav-box">
                    <p>ネットショップ運営業務で作成したバナー等を掲載しております。</p>
<?php echo get_template_part( "parts/nav_parts" ); ?>
                </div>
                <!--△ラップ01終了△-->
<?php print("\n"); ?>
<?php elseif( is_page( '12' ) ): ?>
<!-- お問い合わせページ
======================================================================================================================================== -->
                <!--▼ラップ01開始▼-->
                <div class="name-nav-box">
                    <p>お仕事のご依頼、ご意見などお気軽にメッセージ下さい。</p>
<?php echo get_template_part( "parts/nav_parts" ); ?>
                </div>
                <!--△ラップ01終了△-->
<?php print("\n"); ?>
<?php elseif( is_page( '9' ) || is_page() || is_category() || is_tag() || is_search() || is_single() ): ?>
<!-- ブログTOPページ、カテゴリ、タグ、サーチ、シングル
======================================================================================================================================== -->
                <!--▼ラップ01開始▼-->
                <div class="name-nav-box">
                    <p>チラシ裏ブログ</p>
<?php echo get_template_part( "parts/nav_parts" ); ?>
                </div>
                <!--△ラップ01終了△-->
<?php print("\n"); ?>
<?php elseif(is_home()): ?>
<!-- ホーム
======================================================================================================================================== -->
                <!--▼ラップ01開始▼-->
                <div class="name-nav-box">
                    <p class="name01">河野 和正</p>
                    <!--▼名前開始▼-->
                    <p class="name02">Kawano Kazumasa</p>
                    <p class="birthday">1988年9月14日生まれ(27歳)</p>
                    <!--△名前終了△-->
<?php echo get_template_part( "parts/nav_parts" ); ?>
                </div>
                <!--△ラップ01終了△-->
<?php print("\n"); ?>
<?php endif; ?>