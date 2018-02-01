<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group input-group-lg">
							<span class="input-group-btn">
								<button id="searchsubmit" name="s" id="s" class="btn btn-default" type="submit">Go!</button>
							</span>
                            <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Rechercher …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
						</div>
</form>

