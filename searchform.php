
<form class="likha-search navbar-form navbar-right navbar-form-search" action="<?php echo home_url('/'); ?>">
    <div class="search-form-container hdn" id="search-input-container">
        <div class="search-input-group">
            <button type="button" class="btn btn-dark" id="hide-search-input-container"><span class="fa fa-chevron-right" aria-hidden="true"></span></button>
            <div class="form-group">
                <input type="search" class="form-control" placeholder="<?php echo esc_attr_x('Search …', 'likha') ?>"
                       value="<?php echo get_search_query() ?>" name="s"
                       title="<?php echo esc_attr_x('Search for:', 'likha') ?>"/>
            </div>
        </div>

    </div>

    <button type="submit" class="btn" id="search-button"><span class="fa fa-search" aria-hidden="true"></span></button>
</form>

