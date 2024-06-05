<form role="search" method="get" id="searchform" class="searchform f-grey" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <div class="search-container d-flex align-items-center justify-content-end">
            <input class="mr-3" id="zoekveld" type="text" placeholder="<?php _e( 'Zoeken', 'theme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" id="s" />
            <button aria-label="Zoek" class="position-absolute m-8" type="submit" value="Zoek"><i class="far c-main fa-search"></i></button>
        </div>
    </div>
</form>