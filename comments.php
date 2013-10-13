<?php // Do not delete these lines
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');

    if (!empty($post->post_password)) { // if there's a password
        if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
            ?>
            <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
            <?php
            return;
        }
    }

    /* This variable is for alternating comment background */
    $oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<?php if ('open' == $post->comment_status || $comments) : /* コメントの区切り */ ?>
  <p style="border-top: 1px dotted #B68279; margin: 2em 10px 0;"></p>
  <h2 id="comments">コメント<?php comments_number('', '（1）', '（%）' );?></h2>
<?php endif; ?>

<?php if ($comments) : /* コメントがあるならコメント一覧 */ ?>
  <ol class="commentlist">

  <?php foreach ($comments as $comment) : ?>

    <li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
      <?php echo get_avatar( $comment, 16 ); ?>
      <cite><?php comment_author_link() ?></cite> さん, <small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('Y.m.d (D)') ?> <?php comment_time() ?></a> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></small>

      <?php if ($comment->comment_approved == '0') : ?>
        <em>このコメントは承認待ちです。</em>
      <?php else: ?>
        <?php comment_text() ?>
      <?php endif; ?>
    </li>

  <?php
    /* Changes every other comment to a different class */
    $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
  ?>

  <?php endforeach; /* end for each comment */ ?>

  </ol>

<?php elseif('open' == $post->comment_status) : /* コメント許可がある場合 */ ?>
    <p style="text-align: center;"><strong>コメントはありません。</strong></p>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

  <h2 id="respond">記事にコメントする</h2>

  <?php if ( get_option('comment_registration') && !$user_ID ) : /* 使わない記述（登録した人だけコメント許可するときに使う） */?>
    <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
  <?php else : ?>

  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if ( $user_ID ) : /* 登録ユーザ投稿 */ ?>
      <p><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>としてログイン中。 <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="ログアウト">ログアウトする</a>。</p>
    <?php else : /* ゲスト投稿 */ ?>
      <p><label for="author">お名前 <?php if ($req) echo "<strong>(必須)</strong>"; ?>：</label>
        <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> /><br>
      <label for="email">メールアドレス (非公開/アイコン用) <?php if ($req) echo "<strong>(必須)</strong>"; ?>：</label>
        <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> /><br>
      <label for="url">ウェブサイト：</label>
        <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></p>
    <?php endif; ?>

    <p><textarea style="width: 530px; margin-left: 4px;" name="comment" id="comment" rows="10" tabindex="4"></textarea></p>
    <p style="text-align: right; padding-right: 1em;"><input name="submit" type="submit" id="submit" tabindex="5" value="送信" /><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
    <?php do_action('comment_form', $post->ID); ?>
  </form>
  <?php endif; ?>

<?php elseif ($comments) : // If registration required and not logged in ?>
    <p style="border-top: 1px dotted #B68279; margin: 1em 10px; text-align: center;"><strong>コメント投稿は締め切られました。</strong></p>
<?php endif; // if you delete this the sky will fall on your head ?>
