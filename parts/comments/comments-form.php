<?php comment_form(array(
                'class_form'   => 'row',
                'title_reply'  => '',
                'label_submit' => 'Post Comment',
                'comment_field' => '
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="5" required></textarea>
                        </div>
                    </div>',
                'fields' => array(
                    'author' => '
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="author" name="author" placeholder="Name" required>
                            </div>
                        </div>',
                    'email' => '
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>',
                ),
                'submit_button' => '
                    <div class="col-md-12">
                        <div class="submit-button text-center">
                            <button class="btn btn-common btn-effect" type="submit">Post Comment</button>
                        </div>
                    </div>',
            )); ?>