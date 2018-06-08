<div class="tab-pane" id="tab-collection" role="tabpanel">
    <div class="text-xs-center" v-if="userId == visitorId" v-cloak>
        You can edit your collection of official prizes on the
        <a href="/prizes">Prizes</a> page.
    </div>
    <div class="row">
        <div class="col-xs-12 col-lg-4">
            <div class="bracket">
                <collection-part title="Owning" :edit-mode="editMode" :public="user.prize_owning_public"
                        :extra-text="user.prize_owning_text" v-on:set-text="user.prize_owning_text = $event"
                        :collection-loaded="collectionLoaded" :prize-collection="prizeCollection" part="owning"
                        :prize-items="prizeItems" :prize-kits="prizeKits" icon="fa-inbox"
                        :own-data="userId == visitorId" v-on:set-publicity="user.prize_owning_public = $event">
                </collection-part>
            </div>
        </div>
        <div class="col-xs-12 col-lg-4">
            <div class="bracket">
                <collection-part title="Wanting" :edit-mode="editMode" :public="user.prize_wanting_public"
                         :extra-text="user.prize_wanting_text" v-on:set-text="user.prize_wanting_text = $event"
                         :collection-loaded="collectionLoaded" :prize-collection="prizeCollection" part="wanting"
                         :prize-items="prizeItems" :prize-kits="prizeKits" icon="fa-download"
                         :own-data="userId == visitorId" v-on:set-publicity="user.prize_wanting_public = $event">
                </collection-part>
            </div>
        </div>
        <div class="col-xs-12 col-lg-4">
            <div class="bracket">
                <collection-part title="Trading" :edit-mode="editMode" :public="user.prize_trading_public"
                         :extra-text="user.prize_trading_text" v-on:set-text="user.prize_trading_text = $event"
                         :collection-loaded="collectionLoaded" :prize-collection="prizeCollection" part="trading"
                         :prize-items="prizeItems" :prize-kits="prizeKits" icon="fa-upload"
                         :own-data="userId == visitorId" v-on:set-publicity="user.prize_trading_public = $event">
                </collection-part>
            </div>
        </div>
    </div>
</div>