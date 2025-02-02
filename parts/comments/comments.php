<ul class="comment-list">
                <?php
                $comments = get_comments(array(
                    'post_id' => get_the_ID(),
                    'status'  => 'approve',
                    'order'   => 'ASC',
                    'parent'  => 0,
                ));

                if ($comments) :
                    foreach ($comments as $comment) :
                ?>
                    <li class="comment">
                        <div class="the-comment">
                            <div class="avatar">
                                <?php echo get_avatar($comment, 64); ?> 
                            </div>
                            <div class="comment-box">
                                <div class="comment-author">
                                    <strong><?php echo esc_html($comment->comment_author); ?></strong>
                                    <span class="meta"><?php echo date('F j, Y \a\t g:i a', strtotime($comment->comment_date)); ?></span>
                                    <a class="comment-reply-link" href="<?php echo get_permalink($comment->comment_post_ID); ?>#respond"> - Reply</a>
                                </div>
                                <div class="comment-text">
                                    <p><?php echo esc_html($comment->comment_content); ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                        // Get child comments (replies)
                        $child_comments = get_comments(array(
                            'parent'   => $comment->comment_ID,
                            'post_id'  => get_the_ID(),
                            'status'   => 'approve',
                            'order'    => 'ASC'
                        ));
                        if ($child_comments) :
                        ?>
                            <ul class="children">
                                <?php foreach ($child_comments as $child) : ?>
                                    <li class="comment">
                                        <div class="the-comment">
                                            <div class="avatar">
                                                <?php echo get_avatar($child, 64); ?>
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment-author">
                                                    <strong><?php echo esc_html($child->comment_author); ?></strong>
                                                    <span class="meta"><?php echo date('F j, Y \a\t g:i a', strtotime($child->comment_date)); ?></span>
                                                    <a class="comment-reply-link" href="<?php echo get_permalink($child->comment_post_ID); ?>#respond"> - Reply</a>
                                                </div>
                                                <div class="comment-text">
                                                    <p><?php echo esc_html($child->comment_content); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
                <?php else : ?>
                    <li class="comment"><p>No comments yet. Be the first to comment!</p></li>
                <?php endif; ?>
            </ul>