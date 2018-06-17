<?php
/**
 * 親テーマ Twenty Twelve のセットアップに追加する処理を定義します。
 */
function oki2a24_twentytwelve_child_setup() {
        register_default_headers( array(
                'PC292698' => array(
                        'url' => '%2$s/images/headers/PC292698.JPG',
                        'thumbnail_url' => '%2$s/images/headers/PC292698-thumbnail.JPG',
                        /* translators: header image description */
                        'description' => __( 'PC292698', 'twentyeleven' )
                ),
                'PC292705' => array(
                        'url' => '%2$s/images/headers/PC292705.JPG',
                        'thumbnail_url' => '%2$s/images/headers/PC292705-thumbnail.JPG',
                        /* translators: header image description */
                        'description' => __( 'PC292705', 'twentyeleven' )
                ),
                'PC292714' => array(
                        'url' => '%2$s/images/headers/PC292714.JPG',
                        'thumbnail_url' => '%2$s/images/headers/PC292714-thumbnail.JPG',
                        /* translators: header image description */
                        'description' => __( 'PC292714', 'twentyeleven' )
                )
        ) );            
}                       
/**
 * 親テーマ Twenty Twelve のセットアップに処理を追加します。
 */
add_action( 'after_setup_theme', 'oki2a24_twentytwelve_child_setup' );

/**
 * more タグで URL 末端に付く #more-xxxx を削除します。
 */
function remove_more_link_scroll( $link ) {
        $link = preg_replace( '|#more-[0-9]+|', '', $link );
        return $link;
}
/**
 * コンテンツの more リンククリック時に処理を追加します。
 */
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
