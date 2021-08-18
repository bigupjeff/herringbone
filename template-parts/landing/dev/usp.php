<?php
/**
 * Herringbone Theme Template Part - Dev Landing Page USP Section.
 *
 * @package herringbone
 * @author Jefferson Real <me@jeffersonreal.com>
 * @copyright Copyright (c) 2021, Jefferson Real
 */

//enqueue script for the usp checkbox and autoscroll
wp_enqueue_script( 'hb_usp_js' );
?>


<div class="landing_content cheese" style="--row: 1 / -1; --col: full-l / full-r;">

    <input type="checkbox" checked class="usp_state" id="usp_default">
    <div class="usp_card">
        <div class="usp_blurb">
            <div class="column">
                <h2 class="usp_title">Working With Me</h2>
                <p>
                    There are many benefits to working with me, not least becauase it's
                    just easy! My ethos is founded on honesty and openness with the
                    simple objective of client satisfaction. Keeping this clear goal in
                    mind has allowed me to maintain lasting relationships with all my
                    clients whilst we’ve built some awesome WWW together. Explore the
                    cacti to learn more.
                </p>
                <span class="usp_instruction">Tap a cactus</span>
                <label for="usp_default" class="usp_button green">Learn More</label>
            </div>
        </div>
    </div>




    <input type="checkbox" class="usp_state" id="usp_complete" />
    <div class="usp_card" style="--grid_area: a;">
        <label for="usp_complete" onclick="toggleCheckboxes('usp_state');" style="--grid_area: a;" class="usp_cactiWrap">
            <svg class="usp_cacti" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 250 350">
                <g id="cacti_complete">
                    <path id="path2" fill="#de7c61" d="M82 285.8v4c0 5.3 0 5.3 4 5.3 4.1 0 3.3-2.5 10.6 30.7L104 350h42.8s4.5-13 8-27.9l5.8-27h3.6c3.6 0 3.6 0 3.6-4.9v-4.4zm24.3 27c2.4 0 6.4 4.9 6.4 8.1 0 1.2-.8 3.7-2 4.9-2.8 2.4-8.5 2.8-10.9 0-1.6-2-2.4-7.3-.8-9.3.8-1.6 5-3.7 7-3.7zm19.4 0l4.4 2.5a7 7 0 01.9 10.5c-4.8 4.8-13 1.2-13-5.7 0-3.2 4-7.3 7.8-7.3zm19.4 0c2.9 0 8 4 8 6.9 0 2-2.3 6-4 7.3-2 1.6-7.2.8-9.2-1.2-4-4.5-.5-13 5.2-13z" />
                    <path id="path4" fill="#e54242" d="M104.3 29.6c-.8 0-2 .8-4 2.8-3.3 2.9-6.5 3.3-11.8 2.5-6.5-1.7-6.9-1.3-6.9 4 0 4.8-1.2 6-6.4 6.9-6 .4-7.3 3.2-4 10.9 1.1 2.8 2 3.6-1.3 5.2-2.4 1.6-2.4 10.5 0 12.2l5.7 4c8-28.3 31.5-32.7 53.3-28.3 0 0-4-1.2-4-8 0-8.2-.8-8.6-8-5.7-3.8 1.2-5.8.8-8.6-2.9-2-2.4-2.8-3.6-4-4z" />
                    <path id="path6" fill="#333" d="M124.2 60.7c-3 .5-5.7 1.2-8.5 2l-.4.4.4 4h2.8v11l-9.7.8V68.8l-4 .4v.4l-.4 8.9c-4-.1-8-.8-11.9-2l2.5-8.1c1.3.6 2.6 1 4 1.2l.4-3.2a12 12 0 01-6.5-3.3 167 167 0 00-8 16.2v1.2c1.8.8 3.7 1.5 5.6 2h.8v-2.8l4 1.2c8.2 2 16.2 1.6 23.1 1.2V85h4l.4-.4V65.9l1.7-.7v-4.4zm12 21.4l-4.4.4.7 9.3h4v-3.2c6.6 0 16.3.8 25.2-.8-6.4 3.2-24.2 9.3-29 11.3l-1 .4 1.3 8.9h4.4v-3.6c7.3 0 17.8.4 28.3-.4l1.7 3.2 6.4-1.6c-1-3.3-2.2-6.5-3.3-9.7l-6.8 1.6 1.2 2.8c-10 1.2-21 1.2-28.3 1.2 6.4-2.4 23-8 32.3-12.9v-.4l-2-4.9c-11.3 2.9-22.2 1.7-30.3 1.7v-3.3zm-53.3 2l-.8 4c-1.6 4.9-3 9.7-4 14.6h-2l-.8 3.7c6 1.4 12 2.4 18.2 3.2l-.5-4-7.2-1.2.4-4v-.9c10.2 2.2 20.6 3.2 31 2.8v1.2l-.3 2.5h5.6v-2.5l-.8-9.2h-4v4A139 139 0 0187 95.1l1.2-4.9c2.7.7 5.4 1.2 8 1.6l.9-3.2c-4.6-1-9-2.6-13.3-4.4zm-8.8 28l-.4 6.4V133l.4.4h1.6l7.2.9-.4-2.5a451 451 0 0034.8 2l-.4 2.5h5.5l-.4-16.6h1.7l.4-.4v-3.6h-11.4v3.2l1 .8h3.5v10.1l-12.5-.4c-.2-3.4-.4-6.7-.4-10.1h-6c0 3.2.1 6.5.3 9.7-5.5-.4-11-1-16.6-1.6v-9.3l7.3.4v-3.6A258 258 0 0174 112zm77.5 0c-7.2.3-12 1.1-15 3.2a8 8 0 00-3.2 3.2c-1.6 3-1.6 6.7 0 9.7 3.3 4 9 6 20.3 6 6.4.4 12.9-.6 19-2.8 4-2 6.4-4.4 6-8v-1.3c-1.6-7.2-13.7-9.7-27-9.7zm0 4.4a55 55 0 0113 1.2c2.8.8 4.8 2.4 5.2 4.8v1.2c0 2-1.3 3.3-3.3 4a28.6 28.6 0 01-13.3 2.1 31 31 0 01-11.7-1.2l-2.4-2a5 5 0 01-1.2-3.3l.4-2.8 2-2c1.3-.6 2.7-1 4-1.2zm-17.3 21h-.5v9.3h5.2v-2.4c10.5 0 18.2 0 33.5.8l.8 2.8h8.1v-9.4l-1.2-.8h-8v2.8l-33.5-.4-.4-2.8zm-12.3 2.4l-11.7.8 1.2 3.7h5l.4 8c-11.7-.2-23.5-.6-35.3-1.2l-.7-3.6h-7.6l-1 .4c.6 3.5 1 7 1.8 10.5h8.4l-.8-3.2h6l29.6 1.6v2.8h5.6l-1.2-16.2h2l-1.2-3.2-.8-.4zm12.2 10.5h-.8l.8 4v14.2h-.8l-.9 3.2.4.4h13l-.8-3.6h-5.7v-5c9 0 19.4 0 33.1 1.3v4h9.3v-12.1h-9.2v3.6l-33.5-1.2v-4.8h7.3l-.4-4-12.1-.5zm-44 11.7h-3a26 26 0 00-10.8 2.9h-.8a8 8 0 00-2.8 4.8l-.4 3.2a52 52 0 003.6 12.2c0 .4.4.8 1.2.8h.8l5.7-.8-.9-3.3h34.4v2.9h5.2l-.8-11.8H117v4h-11.7v-4c0-2 0-3.2-.8-4.4a8 8 0 00-3.7-4.4c-2-1.7-5.6-2.5-10.5-2.5zm0 4.5c4 0 6.4.8 8 2l1.2 2.4v6.9H81.7l-.7-5.3c-.4-3.2 2-5.2 6.9-5.6h2.7zm44.4 10.5h-.3l.7 9.3h4.9v-1.6c7.3 0 16.2.4 25.9 1.6l1.6 1.6c2 2.4 2.8 4 2.4 6-.4 3.3-5.2 3.7-13 2.9l-10.4-.8h-3.7l-4-.4v-1.2H133l.9 8.4h4.8v-3.2l7.3.8 12.5 1.2c5.3.4 9.7.4 13 0 2-.4 3.2-1.2 4.4-2 1.2-.8 1.6-1.6 2-3.2 0-1.2 0-2.9-1.2-4.5a23.4 23.4 0 00-5.7-4.8c3.4.3 6.8.7 10 1.2v-8l-8-.9v3.6c-13.7-2-24.2-2.4-33.5-2.4v-2.8h-5.2zm-16.1 12.1h-.4v2.8l-26.7 1.2-4.5.4-1.2-2.4-8 1.2c0 2.9.7 5.3 1.1 8.1 13.1 0 26.2 1.8 38.8 5.3l-24.2 4.8c-4 1.2-8 2.6-11.8 4l3 8.5s0 .4.8 0l6-1.2-.9-2.4 4-.4a197 197 0 0124.3 0v2.8h.8l3.6.4h.5l-.5-9.3h-4.4v2.9c-8-.6-16.2-.8-24.2-.4a240 240 0 0125-5.7l4-.8v-5.3a658.6 658.6 0 00-31.9-4.8l-6-.4 6-.8 26.7-1.2v1.6h4.8v-8h-.8l-4-.5zm43.2 18.2l-.8.4v4l5.6.4-1.2 9c-9-2-18.2-3-27.5-3v-3.1l-4.9.8.5 10 4-.7v-2.6c8 0 17 0 27 2.9l-.3 2.8 5.6 1.6 4-16.6h2.5v-3.2l-1.2-1.2a131 131 0 00-13.8-2zm-52.5 19a41 41 0 00-13 1.6l-5.2 2.8-2.4 2.8-.8 2v5.3a9 9 0 003.6 5.3 15 15 0 008 2.8l8.5.4c5.7 0 9.3-.8 12.1-2.8 2.4-2 4-5.3 4-9 0-2.3-.8-4-2-6l-2-2.4c-3.4-2-7.3-3-11.3-2.8zm36.4 4c-3 0-5.7.4-7.3 1.2l-2.5 1.2-2.9 4a8.6 8.6 0 00-1.2 5c0 2 0 3.6.9 5.2 2 4 7 6 14.2 6 4.7 0 8.8 0 12-1.2 3-1.1 5.3-3.7 6-6.8 1.7-4 0-8.1-4-11.4-2.8-2-6.8-3.2-11.7-3.6H146zm-36.4.4c2 0 4 0 5.3.8.8 0 1.2 0 1.6.8 2 .8 2.8 2.5 2.8 4.9 0 2.8-.5 4.8-2 5.6-2 1.7-5 2-9 2a38 38 0 01-9.7-.8c-1.2 0-2.4-.8-2.8-1.6l-1.6-3.2v-3.2c0-.8 1.2-1.6 2-2.5l1.2-.8c1-.5 2-1 3.2-1.2 2.8-.7 5.7-1 8.5-.8zm36.4 4h2.8c4.4 0 8 1.3 9.3 2.5 2 1.2 2.4 3.2 2 5.6-.4 2.5-2 4-3.6 4.9-2 .8-5 .8-9 .8s-6.4-.4-8-1.6c-1.2-.4-1.6-1.2-2-2-.4-.9-.8-2-.4-3.3l.4-3.2 2-2c.8-.8 2-1.2 4-1.6zm-21.8 19.9H120l-4 .4-.4.4.4 3.6.4.4h2.8l.8 4.8-.8 4c-1.2 3.3-4.8 4.1-11 3.7-2.7-.1-5.4-.7-8-1.6l-2-2-.8-3.2v-4.6c1.7-.5 3.5-1 5.2-1.2v-.8l-.8-3.6c-3.1.3-6.2 1-9.3 2l-.8.8 1.2 2.8v.8c0 1.6 0 3.7.9 5.7 0 2.4 1.2 4 2.4 5.6l1.6 1.2 4 1.7 6.5 1.2c4.8.4 8.5 0 11.3-1.6 1.6-1.3 2.8-2.5 3.2-4a9.7 9.7 0 001.3-5.3c0-2.5 0-4-1.3-6.5h.9V255zm27.8 2a5 5 0 00-4 2l-3.6 5.6c-1.5 2.7-2.8 5.4-4 8.1l-1.7.4h-1.6c-1.2-1.2-2-3.2-2-6 0-.8 0-2.5.8-4l4-.5.4-.4v-3.6l-8-.4-.5.8v.4l.4 2.8c-.5 2.3-.8 4.6-.8 6.9 0 2.8.8 5.2 2 6.9l2.9 2c.8 0 2 .4 3.2 0 1.6 0 2.8-.4 3.6-1.6l1.7-2 1.6-4c1.2-2.6 2.6-5 4-7.4.8-.8 1.6-1.2 2.8-1.2.9 0 1.7.8 2.5 1.6v4l-.8 5.7h-3v4c2 0 4 .5 5.7 1.7l.4-.4.4-4-1.2-.5 1.6-5.6.4-4c0-1.7 0-2.5-.8-3.7-1.2-2-3.1-3.3-5.3-3.6z" />
                </g>
            </svg>
        </label>
        <div class="usp_blurb">
            <div class="column">
                <h3 class="usp_subtitle">Complete Solution</h3>
                <p>
                    Design, Research, Dev, Deploy, Support, Hosting, If there's a hiccup - you know who to talk to and when it all goes right; that's me too! Being a one-man website machine means I can foresee concerns early in the project and adapt to suit. No back and forth between design and development teams and I have all the answers ready for you. This means 1. I can be efficient and 2. I know what it takes to get every aspect of the job done. When I manage larger projects I have insight for days yo.
                </p>
                <label for="usp_complete" class="usp_button red">Back</label>
            </div>
        </div>
    </div>




    <input type="checkbox" class="usp_state" id="usp_personal" />
    <div class="usp_card" style="--grid_area: b;">
        <label for="usp_personal" onclick="toggleCheckboxes('usp_state');" class="usp_cactiWrap">
            <svg class="usp_cacti" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 250 350">
                <g id="cacti_personal">
                    <path id="path26" fill="#de7c61" d="M83 285.8v8.8h4c4.9 0 4-1.6 7.7 15.4l1.2 5.3h30.3l30.7-.5 2-9.6c2-9.3 2.4-9.7 5.3-10.1 2.4 0 2.8-.9 2.8-4.9v-4.4zm14 33.5l5.8 5.7c4.8 4.8 6 5.6 9.7 5.6h4l-5.7-5.7c-4.8-4.8-6-5.6-9.7-5.6zm27.6 0l5.6 5.7c4.9 4.8 6 5.6 9.3 5.6l4-.8-4.8-5.7c-4.4-4-5.2-4.8-9.7-4.8zm14 0l5.8 5.7c6 5.6 8.5 6.8 9.7 3.6.4-1.6 0-3.2-2.4-5.7-3.3-3.2-4-3.6-8.1-3.6zm-22.1 0h-.8l-4 .4 4.8 5.7c4.4 4.8 5.3 5.2 9.7 5.2h4.4l-5.6-5.7c-4.5-4.4-5.7-5.6-8.1-5.6zm-16.6 15.3l1.7 7.7 3 7.7h42.9l3.2-7.3c2-3.6 1.7-7.2 1.7-7.6l-26.3-.5z" />
                    <path id="path28" fill="#61af76" d="M181 139.9l-3.1 13.7c-1.6 7.3-4.8 11.8-8 13.8l-3.7 2c10.8.8 21.6 1.9 32.3 3.2l-9-12.9c-3.4-6.3-6.3-13-8.4-19.8zm-56.4-3.6c-3.7 4-7.6 8-11.7 11.7l-18.6 16-7.3 5.7c12.5-1.2 24.2-1.6 37.2-2h1.6l36.4 1.2-6.5-4.9a647.4 647.4 0 01-30.7-27l-.8-.8zm-55.4 4c-.8 0-4 8.9-7.6 15.4l-5.3 10c-1.2 1.9-2 4-2.4 6.1v1.2c9.7-1.5 19.4-2.8 29-4-6.8-2.8-11.2-8.9-11.2-18.6 0-4.8-1.3-10-2.5-10zM30.4 148H30c-.8.8-1.6 4-2.8 7.3l-4 13.3c0 2.4-.8 5.6 0 8.9l15.3-2.4 11.3-1.7c-7-4-12.5-10.5-15.3-18.1-1.2-4-2.8-7.7-4-7.3zm190.7.8c-.8 0-2.8 4-4.4 8.5l-4 8-7.7 8.1 7.7.8 14.5 2.9c.4-6.5-2.8-19.4-2.8-20.2-1.2-4-2.4-8.1-3.3-8.1z" />
                    <path id="path30" fill="#333" d="M36.5 185.6c-4 .8-7.7 2-11.3 3.6v.8l.8 3.6 3.2-.8a245 245 0 014 25l-2.8 1.3.9 4.4c3.5-1.5 7.2-2.8 10.9-4l-.4-4-4 1.6L36 207a72 72 0 008-2c4-1.7 6-5.3 5-10.6-.5-4-2-6.4-4.1-8l-4-1.2h-4zm51.3-5.3l-11.3 1.2v.8l1.6 4h2l2 24.3h-2.4v5.7l9.7-.8-.8-4.9h-2.4l-.8-9.7h4c2.6 5 5 10 7.3 15h5.3l.4-1.7-.8-4.4h-3.3l-5.2-9.3a5 5 0 004.4-2.8c.8-.8 1.2-2 1.2-2.8l.4-4c0-2.1 0-3.3-.8-4.5-1.6-4-4.8-6-10.5-6zm-17.4.8c-6.5 1-13 2.2-19.4 3.7l1.3 4h2.4l3.2 24.2h-2.4l.8 4.9 16.2-2 .4 2 4-.8-1.6-9.7H72l-.4.8v3.2l-9.7 1.2-1.3-10.5 9.7-1.2-1.2-4-9 1.2-1.5-10.5 9-1.2.7 4H72c-.5-3.1-1-6.2-1.7-9.3zm42-.8a8 8 0 00-8 5.7l-.4 4c0 1.6.4 3.2 1.2 4 0 .9.8 1.7 1.6 2l4 2.9 6.5 4c.8.8 1.2 2 1.2 3.3 0 1.6 0 2.8-.8 3.6-.8.8-2 1.2-3.6 1.2l-5.3-.4-.8-4h-3.6v.4l1.6 10h2.8l.4-.3v-2l5.7.8 4-.4c2.9-1.7 4-4.5 4-9.3 0-2.5-.3-4-1.5-5.7l-12.6-8.9a4 4 0 01-.4-2v-2c1.2-1.6 2.8-2.4 5.7-2.4l3.6.4.4 5.6h3.2v-10.1l-2.8.8c-2-.7-4-1.1-6-1.2zm25 .8c-2 0-3.5 0-4.7.8-4 2.4-6.5 8.1-6.5 16.2 0 5.6.8 10 2.8 13.3 2 2.8 4.5 4.5 8 4.5 7 0 10.6-6.1 11-17.4 0-6-.8-10.5-2.4-13.3a8 8 0 00-3.2-2.9 8.6 8.6 0 00-5-1.2zm59 2.4h-4.7c-4 9-8.1 19-10.6 28.3l-2.4.4v4.9h9v-4l-.5-.5h-2.4l2-6.4c3.2 0 6 .8 9.3 1.2l1.2 6.4h-2.8v4.5c3 .2 6 .4 8.9.8v-4.4h-1.7c-1.7-9.3-4-22.7-5-30.4v-.8zm-34.6-1.6l-9 .8c0 1.4-.2 2.7-.3 4h3.6c-.8 7.3-1.2 16.2-1.2 24.3h-3.2v4l.4.9h9.2v-5.3H158c0-8 0-17 .8-24.2 2.9 9.3 6.5 19 9.3 29.9h.4l5.3-.4c0-9.3 1.2-20.2 2-28.3h2.4l.8-.4v-4.5h-9.3v4h2.9L171 211l-8.4-28.3c0-.4 0-.8-.8-.8zm57.3 4.9c-3.3-.4-6.7-.6-10-.8v4.4h2.3l-3.2 25.9h-2.8l-.4 4.4 15.3 3.6v2h4v-11.6H221l-.4 4c-2.8 0-5.6-.8-8-1.6l3.2-25.9h3.2zM37.7 190c4-.8 6.5 1.2 7.3 5.3 0 2 0 4-1.2 4.8l-2 1.6-3 .8-3.5.4-2-11.7zm51.3-4.8c2 0 3.3.4 4 1.2 1.3 1.2 1.7 2.4 1.7 4.4 0 2 0 4-1.6 4.9l-1.6.8h-6.1L84.2 186zm104.3 3.2l2 14.5-7.3-.8c1.6-4.6 3.4-9.2 5.3-13.7zM137 186c1.2 0 2 0 2.8.8 1.2 0 1.7.8 2.5 1.6l.8 4 .4 5.7c0 4.4-.8 8-1.6 9.7-1 2-2.5 2.8-5 2.8-2.3 0-4-.8-4.7-2.8-1.3-2-2-5.3-2-9.7 0-4 .7-7.3 1.6-9.3.8-.8 1.2-1.6 2.4-2zm-30.7 42c-4 0-7.3 0-10.5.8l-.4.8 1.2 5.3h1.6c0 9.6 0 21-1.2 33.5h-2.4l-1.2 8.5h10v-7.7H101l.9-15 4 .9c2 7.6 3.7 15.3 5.2 23h5.7v-9.3l-3.2.4-4-14.6a8 8 0 004.4-4 7.8 7.8 0 001.2-4 27 27 0 000-11.3c-1.2-4.9-4-7.3-9-7.3zm-16.2 0c-6 .5-11.8 1.2-17.7 2v5.3l2.4-.4c0 9.2 0 20.2-1.6 31.9l-2-.8v.4c-.5 2.3-1 4.6-1.7 6.8l16.2 1.6v3.3h4c.6-5.3 1-10.5 1.2-15.8h-2.8c-.8 0-.8 0-.8.8l-.4 4.5h-9.7l1.2-15h9v-6l-8.6.4v-13l8-.4v5.3h3.3v-11zm110.7 4c-6.1-.6-12.3-.9-18.5-.8v5.3h2.4c0 9.3 0 19.4 1.6 29.9H184a72 72 0 001.2 6.4l12-6 1.3 2h3.3c-1-3.9-1.7-7.8-2-11.7h-3c-.3 0-.7 0-.7.8l.4 3.6-6 4.9-1.7-12.6h9c-.3-1.7-.4-3.5-.5-5.2H188v-12.1l8.5.4.4 5.2h3.2l.4-9.7zm-141.4-2.4c-2.4 0-4 1.2-5.6 3.2l-1.6 4v4.1c0 2 .4 3.6 1.2 4.9 0 .8.8 1.2 1.2 2l3.2 2.8c2 1.7 3.9 3.4 5.7 5.3.8.8 1.2 2.4.8 4 0 2-.8 3.6-1.6 4.4-.8.9-2 .4-4 0-1.3 0-2.1-2.8-3.7-3.2V256l-3.6 1.2c0 3.6 0 7.2-1.3 10.9l.4.8h3.3l.4-2.4c2 .8 2.4 4 4 4 1.2.4 2.8 1.2 4 .8 3.3-1.6 5.3-5.6 6-11.7.5-3.2 0-5.7-.7-7.3-.4-1.6-2.4-3.6-4.8-5.2a82.3 82.3 0 00-5-3.7l-1.1-1.6-.4-2v-2.4c.8-2 2.4-3.3 4.4-3.3h3.7l.8 6.5 3.2-.4c-.2-3.8-.4-7.5-.8-11.3l-2.8 1.2c-2-.4-4-.8-5.7-.4zm108.7-.4c-3.2 0-5.6 1.2-7.7 4.4-2 3.3-2.8 9-2.8 16.6 0 8 1.6 15 4 19.4a13 13 0 004 5.3c1.3 1.2 3 1.6 5 1.2 2 0 3.6-1.3 5.2-3.3v1.6c0 .9.8 1.3 1.2 1.3l3.2-1.7c-1.1-4.2-2-8.5-2.8-12.9l-3.2 2 .4 4a8 8 0 01-4 1.7c-1.3 0-2.5 0-3.3-.8-3.2-1.6-5.2-8.1-5.2-17.4 0-6 0-10 1.2-12.5l2.4-2.8 3.2-.9 4 1.3.5 7.6 3.6-.8c-.3-4.2-.4-8.3-.4-12.5l-3.2.4c-1.7-.8-3.5-1.2-5.3-1.2zm-34 0l-.3.4v5.3h2.4c-1.6 10-3.6 20.6-5.3 33.9l-6-33.5h2.8l.4-.9-.4-5.2h-8.5v6.5h1.2c3.3 13.7 4.9 23.8 8 42l.9.8 4-1.2c2-17 4-30.3 7-42.4l2-.9v-4.8zm11 0h-.4v6.1h2.4c0 9.7 0 21.4.8 33.9h-2.3l-.4.4.8 7.3 9.3-.8-.8-7.3h-2.4c-1-12.1-1-24.3-1-33.5h2l.6-.9v-4.8zm-38.5 4.4c1.6 0 2.8.8 4 2l.9 5.7c0 2.8-.5 4.9-1.7 6l-2 1.3a8 8 0 01-2.8 0h-3.2V234h5.2z" />
                </g>
            </svg>
        </label>
        <div class="usp_blurb">
            <div class="column">
                <h3 class="usp_subtitle">Personal Service</h3>
                <p>
                    I'll always be your direct point of contact and all resource will come from me unless we planned otherwise. Getting to know you means I understand how the project should take shape to best suit your collaboration style, and ultimately how the website fits you - the brand. You will never be a number!
                </p>
                <label for="usp_personal" class="usp_button red">Back</label>
            </div>
        </div>
    </div>





    <input type="checkbox" class="usp_state" id="usp_flexibility" />
    <div class="usp_card" style="--grid_area: c;">
        <label for="usp_flexibility" onclick="toggleCheckboxes('usp_state');" class="usp_cactiWrap">
            <svg class="usp_cacti" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 250 350">
                <g id="cacti_flexibility">
                    <path id="cacti_pot" fill="#de7c61" d="M91 286.2h-7.4v4.8l-.8 4.5H91l2.4 12c3.3 15.8 3.3 15.4 6 10.2l2.5-4 3.2 4.4 3 5.6-5.4.4c-3.6 0-5.2.4-5.2 1.7 0 1.6 6.8 24.2 6.8 24.2h43s6.3-21.4 6.3-23.4-.8-2.5-5.2-2.5H143l2.8-5.2c3-5.7 4-5.7 6.1-.8 2 3.2 4 4 4 1.2l2-13 2-10.8h3.7c3.3 0 3.3 0 3.3-4.9v-4.4zm15.7 26.2h13.7l-2 4-3.7 6.1c-1.2 2-1.6 2-3.2-1.6l-3.2-6zm24.2 0h13.3l-2.8 5.3c-3.2 6-4 6.8-4.8 6l-3.3-6zm-5.3 1.2l3.3 5.3 2.8 5.2h-12.5l2.8-5.2c1-2 2.2-3.7 3.6-5.3z" />
                    <path id="path10" fill="#333" d="M103.4 259v3.3l.8.8h1.6l-1.6 15.4.8.8 6.5 1.2h.4v-3.2c10.5.8 14.1.8 26.7.4l.8 2.8c2.7-.2 5.4-.6 8-1.2v-.4c-1-4-1.8-8-2.4-12.1h-.4l-6 .8-.8.4.8 5.2-12.2-.4 1-10c0-.5 0-.9-1-.9h-4v11h-10.9l.4-8.2h3.6v-5.2c-3.2 0-6.8 0-11.3-.8h-.8zM92.1 76h.8v.5l22.2 1.6-.8-4-8-.5v-5.2c13.7 1.2 21.8 1.2 34.7-.4l.4 4 10.5-2-2-12.1h-1.2l-9 2 1 4a129 129 0 01-34 0l.4-4.8c3 .2 6.1.4 9.2.4l1-3.2h-.5a143 143 0 01-17.4-2.5v4c-1.3 5-2.2 10-2.8 15h-1.3c-1.2-.4-1.6 0-1.6 0zm6.5 69.6a43 43 0 003.6 10l1.2.5 6-.4c0-.8 0-1.7-.7-2.5h33.1l-.8 2.5c2.6.2 5.1.4 7.7.8.8 0 1.6-2 2.4-5.3.6-2.2 1-4.5 1.2-6.9l-.4-4-.4-.4a8 8 0 00-1.2-2c-2.8-3.7-8.9-5.3-15.8-4.9-5.6 0-8.9 2-10 5.3l-.9 1.6c-.3-.7-.7-1.4-1.2-2-1.6-1.6-4.4-2.8-9.3-2.8-4.8-.4-9.3.4-12 2.4l-2 2.8a8 8 0 00-.5 5.3zm9.3 60.6v.4c1 7.2 1.4 14.5 1.6 21.8l4.4.4V226c7.7.8 15.4.8 25 0l-.3 3.2 6.4-.4v-19l3.3-.8v-4h-.4c-4.4.1-8.7.4-13 .8v3.2c0 .8 0 1.2.8 1.2h3.7v11.3l-11.3.4-.8-11.3-4 .8.3 10.5-10-.4-.5-10.5h4v-4l-8.4-1.2zm-1.2-17.8a250 250 0 012 10.9l4 .4.8-.4-.4-2.8 13-6.9c4 2.8 8 5.3 14 8v3.3l6.6-.4v-10h-6.5v2.3L129 188l12-4.9v2l7-.3.4-9.7-.8-.4H141v2.8c-6 2.4-12 6-16.2 8l-12.5-8V175h-.8l-6.5-.4c.8 3.2 1.4 6.4 2 9.6h5.3v-1.6l9.3 4.5-8.9 3.6-.8-2.4h-5.2zm-7-137.8v.4l1 .4c2.6.4 5.3.7 8 .8h.4v-2c8-1.2 13.7-4.4 18.6-6.9l1.2-.8 9.3-.4v.4l.4 2.5h.8c2.4-.4 5-1 7.3-1.7-.8-3.4-1.8-6.7-2.9-10h-.4c-1.8.6-3.7 1-5.6 1.2l-.4.4V38h-8l-8.2-4-8-3.3v-2.4c-1.3 0-2.5 0-4-.8h-.9l-2 6-.9 2.5.8.8c2 .3 3.8.5 5.7.4l.4-2.4 13.3 5.2-8 3.2c-2 .8-4.5 1.7-7.7 2l.4-2.4h-.4c-2.2-.3-4.4-.9-6.5-1.6h-.4zm4.5 120h.8c2.2 0 4.4.2 6.5.4l-.4-2.8c11 .8 17.8.4 30.3 0v3.6l7.7-.4.4-10.5h-7.7v3.2l-31-.4-1.3-3.2h-6zm-7.6-42l.4.4h9.7v-2.4H143l-.8 2.4.8.4 9.3-.8 1.2-9.3c0-.4 0-.8-1.2-.8l-9.3.8v2.4a285 285 0 01-37.2 0v-2l-.8-.8H96zm-3.3-38l1.2.4 10.1.4V89c17.8.8 20.6.8 38-.8l-.4 2.8.8.4 10.1-1.2v-10h-.8l-9.7.7v2.8a146.2 146.2 0 01-37.6 0l-.8-2.4-8-.8H95l-1.6 9.7zM108 244.1v10.5l4.8.9v-3.3c4 0 20.2.8 26 .4v3.3h6l.7-.4-1.2-17.8 2-.8-1.2-4-12 2 .3 4 5-.4v9.3h-24.8l-.4-4h-4.8zM93.3 104.3l1.2 9.7 1.6.9c3.1-.2 6.2-.4 9.3-.4l-.4-2.9c15.8.8 22 .8 38 0l-.4 2.9h10.5c-.4-5.9-1-11.6-1.6-17.4l4-.8-1.2-2.9-1.6-.4-17.8 1.7c-1.2 0-1.6 0-1.6.8l.8 3.2s0 .4.4 0l7-.4 1.1 8.9c-21 1.2-17 1.2-38.4 0v-3.3h-.8l-10 .4zm13 40.9v-2.5c0-.8.8-1.6 2-2.4 1.2-.8 3.2-.8 5.6-.8 3 0 4.5.8 5.7 1.6l.8.4a9 9 0 011.6 5.3v2.4l-15-.8zm21 0V141c.8-1.2 1.6-2.4 3.2-2.8l4-.8 4 .4 3 1.6c.5.7 1 1.5 1.1 2.4v7.3h-15l-.3-3.2z" />
                    <path id="path12" fill="#61af76" d="M129.7 1c-.8 0-2 5.3-4 11.4-4 9.7-2.9 11.3-5.7 11.3l6.4.8 1.7-11.3c1-4 1.4-8 1.2-12.1zm-42 12c-1.2 0 1.6 7.3 4.4 11.8 4 5.2 2.4 7.2 2.8 8.8l4-5.2-5.2-8a36.6 36.6 0 00-6-7.4zm72 13c-.5 0-2 1.6-4 4.8l-3 5.3 2 3.2 3.3-6.9c2-4 2.4-6.4 1.6-6.4zM73.8 51.4c-3.6 0-2 2.4 5 5.3 4.3 1.6 6 2.8 6 5.2l2-8.9c-1.3.8-3.3.8-7.3-.4-2.4-.8-5.7 0-5.7-1.2zM178 89l-7 .8-6.8 1.2.4 5.7 7-4zM73 99.5c-1.7 0 .3 2.4 6 6.5l7.2 5.2-1.2-6.4-6-2.9zm102.1 38c-.8 0-2.8.4-5.6 2.4l-6 2.8-1.7 7.3 7.3-5.7c5.2-4 7.2-6.8 6-6.8zm-88.9 3.6c0 .4-3.2.8-6.8.4l-6.5-.4 7.7 4 7.3 3.7zm-.8 44c-1.6 0 0 2.5 5.3 6.1 3.6 2.8 5.2 4 6.5 6.9L94.6 188c0 .8-2.4 0-4.8-1.2-1.3-.8-2.6-1.4-4-1.6zm72.8 4.1l-2 6.5 9.6-2 9.7-2-8-.5c-4.9 0-9-1.2-9.3-2zm-2.5 30.3l-.8 10.1 6-4 6.2-4-5.7 1.1c-4 .8-5.3-6.8-5.7-3.2zm-57.3 0c-.8 4-3.3 3.6-4.9 3.2-6-1.6-6 2 0 4 2.8.5 5.3 2.5 5.7 4.1zm67 40.4h-3.6l-8.9.8.8 6.9c0-2 2.8-2.9 10.5-4 9.3-1.7 9-4.1 1.2-4.1zm-78.3-.8c-2 0-.9 2.4 4 4.8l5.2 4 1-6.8c0 .8-3 0-5.4-.8-2.4-.8-4.8-.4-4.8-1.2z" />
                </g>
            </svg>
        </label>
        <div class="usp_blurb">
            <div class="column">
                <h3 class="usp_subtitle">Flexibility</h3>
                <p>
                    I can quickly adapt to your needs and make instant decisions to benefit us both. If something needs to be pushed through pronto I can adjust the project to suit. You forgot about pages x, y and z? No problem, I'm already planning them into the project and I'll have a quote over shortly.
                </p>
                <label for="usp_flexibility" class="usp_button red">Back</label>
            </div>
        </div>
    </div>






    <input type="checkbox" class="usp_state" id="usp_experience" />
    <div class="usp_card" style="--grid_area: d;">
        <label for="usp_experience" onclick="toggleCheckboxes('usp_state');" class="usp_cactiWrap">
            <svg class="usp_cacti" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 250 350">
                <g id="cacti_experience">
                    <path id="path33" fill="#de7c61" d="M87.2 285.8H86c-2.4 0-2.4.4-2.4 5.2v4.9h7.6l1.2 5.6 1.7 7.7c.4 1.6 2.4 1.6 31.5 1.6l31-.4 1.7-7.3c1.6-7.2 1.6-7.2 4.8-7.2 3.3 0 3.3 0 3.3-4.9 0-4.4 0-5.2-2-5.2h-.8zm8 29.9l1 2.8.7 4.4c.8 2 2.4 2.9 2.4 1.2l2-3.2 2-2 3 3.2 3.1 3.3 1.6-2.5 2.4-3.6c.5-.4 2 .4 4 2.4l3 3.7 1.5-2.5 3-3.6c0-.4 1.5 0 3.5 2.4l2.8 3.7 2-2.5 2.5-3.6c.4-.4 2 0 4 2.4l2.4 3.7 3.3-3.3 2.8-3.6 2 3.2c2.8 4 4 3.2 4.5-2l.8-4h-30zm52.6 6.8l-2.8 4-2.9 3.3-2.4-3.6-2.8-3.7-2.8 4-2.9 3.3-2.8-3.6-2.8-3.3-2.9 3.3-2.4 4-2.8-4-2.8-3.3-2.9 3.3-2.8 3.6-2.4-3.6-3.3-3.3c-1.2 0-5.2 6.9-4.4 8.1 0 1.6 4 2 27 2h26.3v-2.4c0-1.2-.8-3.6-2-5.2zm-13 14.2h-9.2c-21 0-25 .4-25 1.6l1.1 6.4 2.5 5.3H147l2.4-4.4c2-8.1 4-9-14.5-9z" />
                    <path id="path35" fill="#61af76" d="M101.7 83l-.8 3.2c-1.2 4.4-1.6 4.8-4.8 1.6-3.3-3.2-3.7-2.8-2.4 1.6 1.2 3.2-4 3.2-6.5 2.4-1.6-.4.4 5.7 4 8.1 8.5.8 17 2 21.8-5.2 2.5-3.7 1.3-4-2-2.9-2.8 1.2-3.6 1.6-2.4-2.4 1.6-4.8 1.2-4.8-2-1.6-3.7 3.6-4 3.2-4-1.2l-.9-4zm85.7 11.2l-2.8 4c-3.7 5.7-3.7 5.7-4 0 0-4.8 0-4.8-1.3 0-.8 4.1-3.6 3-3.6-1.5 0-4-2-4.9-4 0 1.5 4-3.3 6.4-5-4-.3-2.5-4 8.8-3.2 11.2-.4-.4 7.3 16.2 23.5 9.3 14.5-11.3 10.5-12 1.6-9.3-3.6 0-2.8 0-2-4.8.8-2.8 1.2-4.4.8-4.9zM34.7 136c-1.7-5.3-2-5.3-3.7 0-1.2 4-2 4-4 1.2-1.2-2.9-1.6-2.9-1.6 1.2 0 2.4-4 2.4-5.7 2.4-1.2 0-2 .8-1.2 2 1.2.8.8 5.3-.8 7.3-1.6 2.8-1.6 4 0 4 2 0 4.8 1.7 4 3.3 12.6 8 21.4-9.3 13-21.4zm196 36.3c-12.2 4.5-7.4 18.2-1.3 28.3 4 2.8 3.2 0 8 .4-.3-1.6-1.5-2.4-4-4.4-4-4-4-4 1.7-2.5 5.6 1.7 5.6 1.7 1.2-2.8-4.5-4-4.5-4 0-4.4 4-.4 4-.4 0-1.6-3.3-1.3-3.7-2-.8-6.1 2.4-4 2.4-4-1.2-2.4-3.3 1.2-4 .8-3.3-2 .4-1.3 0-2.5-.8-4-1.2.7 1.6 1.1.4 1.5zM16.5 232.9c-1.6 1.2-6 3.3-1.2 2.5 1.2 0-.8 2-2 4-2.5 4-5.3 4.4 1.2 4.4 2.4 0 4.4 1.3 2.8 2-1.6.9-5.7 3.3-5.7 4.5 0 1.6 4.5 1.2 6.5.4 2.4-1.2 3.2 0 2 3.2-1.2 4-.8 4.5 1.2 2.9 1.6-1.2 4-.8 4.5.4 13.7-9.3 0-28-9.3-24.3z" />
                    <path id="path37" fill="#333" d="M111.4 106a145 145 0 00-19.8 4.8l1.6 4v.5h1.3l2.4-.8 5.2 27H99v5.7l.8.8 12.1-2.4c.8 0 .8 0 .8-.8l-1.2-4.5v-.4l-4 .8-1.6-10.9 4.8-.4 11.3 13.7h1.2l7-1.2.7-1.6-.8-4c0-.4-.4-.8-1.2-.4l-4 1.2-8.5-9.3c2.4-.8 4-2.4 5.2-4.5.8-1.2 1.2-2 1.2-3.6v-4.4l-2-4.9c-1.6-2.8-4.8-4.4-9.3-4.4zm34.8 2.4h-.4l-2 4v.8l3.6 1.3-8 26.2-3.7-1.6-.4.4-1.2 4v1.3l11.3 4 .8-.4 1.2-4v-.9l-3.2-1.2 8.4-26.2 3 1.2.7-.4 1.2-4v-.5zm-35.2 2.8c1.2 0 2.5 0 3.3.8a7 7 0 012.8 4.5c0 2.4 0 4-1.6 5.6-.7.7-1.6 1.3-2.5 1.6l-4 .9-4 .8-2.9-12.2c3-.8 6-1.5 9-2zm67.5 12.1l-4 3.3v.8l2.8 2-19.4 19.4-2-2.4h-.4l-3.7 3.2v.8l16.2 15.8-.8.8v1.2l3.2 3.2h.8l7-7.7v-.8l-2.9-2.8h-1.2l-2.5 2.4-10-9.3 8-8 9.3 8.4h.8l2.8-3.2v-.8l-9.3-8 8.1-8.6 9 8.1-3 2.8-.3.9 3.2 3.2h.4l7-6v-1.3l-18.7-17zM66.2 125h-.4l-17 19v.8L52 148h.4l2-2.4 20.3 19-2.9 2v.4l3.7 3.6h.8l15-16.6 1.1.9h.8l3.7-3.3v-.8l-8-6.9h-.5l-3.2 2.9v1.6l2.4 2-8.9 10.1-8.5-8 8.5-9c.4 0 0-.4 0-.8l-3.2-2.8h-.8l-8 9.7-8.2-8 7.7-9.4 2.8 3.3h.8l3.2-2.9v-.8l-6.4-6.8zM48 154.4c-1.6 0-2.8 0-4 .9-1.6.8-3 2-4 3.6l-2.5 4.8c-1.9 4.8-3.5 9.7-4.9 14.6l.4.8 3.3 1.6h.8l1.2-4 26.3 10.5-2 4 4 2h1.2l5.2-13.7v-.8l-4-2h-.4l-2 5.6-10-4c1.5-3.5 3-7.2 4-11 .7-5.6-1.3-9.2-6.9-12zm0 6.1l3.6.4c2 1.2 3.7 2.4 4 4.5v2.8l-1.5 4-2 4-12.2-4.8 2.4-6c1.3-3.3 3.3-4.9 5.7-4.9zm161.6 2.4l-4 .8h-.8v.4l1.2 4.5-26.3 6.9-1.2-3.7h-.4l-4 1.2s-.4 0 0 .8l2.8 11.8s0 .4.4 0l4.8-1.3v-.8l-.8-3.6 26.3-7.7-28.3 23v.5l2 6s0 .4.8 0l30.7-8 .8 3.2c0 .4.5.8 1 .4l4-1.2h.3v-.8l-2.8-11h-.4l-4 .9h-.5v.4l.8 4-26.2 7.3 27.4-21.9v-1.3l-2.8-10.5zM62.2 195.3H61l.4 4-13.7 10.5-13.3-8v-3l-.4-.3h-4.9l-.8.4.8 10.9c0 .4 0 .8.8.8l4-.8h1v-2l9.6 4-9.3 5.7v-2.9H30l-.4.5v.4l1.2 12v.9h5c.3-.4.7-.4.3-.8v-3.3l13-10.5 14.5 9.3v3.3h5.6c.4 0 .8 0 .4-.4l-.8-11.8-.4-.4h-4c-.8 0-.8.4-.8.8v2.5l-11-5.3 10.1-6v2l1 .4 4-.4.7-.8-1.2-11.3zm132.2 9.2c-3.7 0-6.5.9-9 1.7a13 13 0 00-4.4 4c-2.6 4-3.2 9.2-1.6 13.7h-1.2c-.8 0-1.2 0-1.2.8v4c-.4.9 0 .9 0 .9l9.7.8.8-.4v-4l-.4-.8-3.2-.9v-5.6c0-1.6.4-3.2 1.2-4 2-4 7.2-4.9 15-3.7 5.2.8 8.4 2 10.4 4 1.2.9 1.6 2 2 3.3v4.4c0 1.6-.8 3.7-1.6 5.7l-6.4-.4h-.9l-.4 4.4.4.8 11 2c.8 0 1.2 0 1.2-.8v-4.8c.8-1.6 1.6-4 2-6.9.8-4.4 0-8-2.4-11.3-4-3.5-9-5.6-14.2-6zM73.1 227.2h-.4l-8.4 6v.8l2 3.7c.4.4.8.8 1.6 0l2.4-1.6 8.1 11.3-9.7 6.4-7.3-10.5c0-.4 0-.4-.4 0l-3.6 2v1.3l7.3 9.7-9.7 6.8-7.3-9.7 4-2.8v-.8l-2.4-3.6H49l-8 4.8s-.5.4 0 .8l14.5 20.6c0 .4 0 .4.4 0l4-2c.4 0 .4 0 0-.4l-1.6-2.8 23-15 1.2 2.9h.8l4-2.5v-.8l-12.8-18.6 1.2-.8c.4 0 .8-.4.4-.8l-2.4-4h-.5zm102 4.8h-.5l-13.4 18.6-1.2-.8h-.8l-2.8 4v.4l8.5 6.1h.8l2.4-3.6v-1.2l-2.8-2 8-11.4 9.3 6.9-7.6 10v.9l4 2.4h.8l6.5-10.5 9.7 6.9-6.9 10-3.2-2.3-.4-.4h-.4l-2.9 3.6v.4l7.3 6h1.2l14.2-21v-.8l-3.7-2.8h-.8l-1.6 2.8-22.2-16.1 2.4-2.4v-.8z" />
                    <path id="path39" fill="#61af76" d="M105 164.5c1.2 0 1.6 7.7 3.6 7 2.4 0 12.1-8.2 6.5 1.5-2.9 2.9-.8 3.7 3.2 4 6.5.5 5.3 1.7 1.2 4.1-4 1.6-2.8 2.8 0 4.9 4 2.8 2.8 4.8-4.8 2-4-.4-3.7 5.6-6.5 8-2.8-3.2 0-8.4-2-8.8-1.6 0-6.5 5.6-9 4.4 1-4 1.7-4 3-6.8.7-2-4.5-1.7-8.2-3.7-4.4-2-5.6-3.2 1.2-4 1.7 0 3.3 0 4-.8v-.8c0-.4 0-1.3-1-2-6-5.7 0-4.5 6-1.7 1.1-1.2 1.1-2.8 1.6-4.8zm23 69.5l3.2 3.7c1.2 1.6 2 2.8 3 2.8h.7c.8 0 1.2-.8 1.2-2.4 2-8.1 4-2 4 4.8 2 0 3.7-.4 5.3-1.2 8-2-3.3 4-1.6 6.5 2 1.6 13.3 6.4 2 6.4-4-1.2-3.3.9-1.6 4 2.8 6.6 1.2 6.1-2.9 3.7-3.6-2.4-4-.8-4 2.4-.4 5.3-3.2 4.9-4.5-3.2-1.6-3.2-6.4 0-10-1.6 1.2-4 7.2-4 6.4-6-.8-1.3-8-2.9-8-5.7 4-1.2 4 0 7.2-.8 2 0-.8-4.9-1.2-9 0-2.7 0-4.4.8-4z" />
                </g>
            </svg>
        </label>
        <div class="usp_blurb">
            <div class="column">
                <h3 class="usp_subtitle">Experience</h3>
                <p>
                    I come swinging many swords and can't think of anything you could throw at me that wouldn't be achievable. If you have a website problem I've likely had to solve it before and if you think you have something I can't solve... well now you've gone and done it. Challenge accepted!
                </p>
                <label for="usp_experience" class="usp_button red">Back</label>
            </div>
        </div>
    </div>





    <input type="checkbox" class="usp_state" id="usp_value" />
    <div class="usp_card" style="--grid_area: e;">
        <label for="usp_value" onclick="toggleCheckboxes('usp_state');" class="usp_cactiWrap">
            <svg class="usp_cacti" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 250 350">
                <g id="cacti_value">
                    <path id="path15" fill="#de7c61" d="M83.4 286.2v9.7h6.8l1.7 8.8c1.6 7.3 5.2 15.4 7.2 15.4l3-2.8 2.3-2.9 2.4 2.9 2.8 3.2 3-3.2 2.7-2.9 2.4 2.9 2.8 2.8c.5 0 1.7-1.2 3-3.2l2-2.9 2.7 3.3 3 3.2 2.3-3.2 2.8-2.9 2.8 2.9 2.5 3.2 2.4-3.2 2.8-2.9 2 2.9c2.5 3.2 4 3.6 5 1.6l2.7-12.1 2.4-10.1 4-.4h3.7v-10.1zm32 32.3l-2.9 4-2.5 3.3-2.8-3.7-2.8-3.2-2.4 3.2c-2 3.3-2.5 3.3-4 1.6-2.5-2.4-2.5-2.8.7 13l4.5 13.3H146l4-10.5c2.5-13 2.5-13-.8-17l-2.4-2.8-2.8 2.8-2.4 3.3-2.9-3.3-2.4-3.2-2.8 3.2-2.9 3.3-2.4-3.7-2.4-3.2-2.8 3.2-2.9 3.7-2.4-3.7z" />
                    <path id="path17" fill="#333" d="M166.2 139.5l-2 2.4v1.2l.8 1.7-11.7 6.8v2.8h.4c.8 0 1.6 0 2.4-.8v17.8l-2.8-1.2v2.8a71 71 0 019.3 8.1l.4-.8 1.6-4.8-.4-.8-4-1.7v-8c3.2.1 6.4.4 9.6.8v-4l-9.7-.5v-8.9l6.5-2 .8 3.6c0 .4 0 .9.8.9l3-1.7a39 39 0 00-4-12.9zm36.4 4a33 33 0 00-9.7-4l-.4 1.2c-.2 2.4-.2 4.9 0 7.3v.4l1.6.4c0 12.1 0 19 1.2 32.3h-1.7v1.2c0 2.5 0 5.7.8 9 0 .7.4 1.1.8 1.1 2.8-1.6 5.2-4 8-6.4v-1.2c-.8-2-1.5-4-2-6.1l-.3-.4c-.9 0-1.7.8-2 1.2-.9-4-.5-8.9-.5-12.1l3.3-.4c1.6 4 3.2 9.3 6.8 12 0 .5 0 .5.4 0l4-3.5.5-1.3v-2.4c-1.6 0-2.9.8-4 1.2l-4-6.8c2.3-.8 4-1.7 5.1-3.3l1.7-2v-3.2l-2-3.7c-1.9-4-4.6-7.6-8-10.5zm-22.3-6.4c-1.6 0-2.8 1.2-4 3.2l-1.6 11c-.6 10.4-.6 21 0 31.4.8 5.7 2.8 11.3 6.5 12.2l2.8-.5 2-2.4a40 40 0 003.2-12.1l.8-14.5a93 93 0 00-4.8-25.5 10 10 0 00-1.6-2c-1-.7-2-1-3.3-.8zm21.5 13.3c1.6.4 2.8 1.6 4 2.8l1.6 4c0 2.1 0 3.3-1.6 4.1l-1.6 1.2c-1.9.2-3.8.2-5.7 0-.4-4-1.2-8-.8-13.3a9 9 0 014 1.2zm-20.6-3.6c.8 0 1.6 0 2 .8l.8.4 1.2 2.8.4 2 .8 4c1 7 1 14.1-.4 21v.9l-1.6 4c-.8.8-1.6 1.2-2.4.8-2 0-3.3-2.4-4-5.6v-25c0-2 .3-3.3 1.1-4.1.4-.8 1.2-1.6 2-1.6z" />
                    <path id="path19" fill="#333" d="M132.6 121.7c-4.8-.4-9.2-2.8-14-4.8l-.9.8-2 8.9v.8h2a121.3 121.3 0 000 34l-2.4.3c.4 2.8.8 5.7 2 9 0 1.1 0 1.5.4 1.1l12.1-5.6c0 .8 0 1.6.8 2l.5.8 2.4-.8v-.8c-2.4-3.7-1.2-8.1-.4-12.1l-3.3-.9s-.8.5-.8 1.3l-.4 4c-2.8 0-5.2.8-8 1.2a83 83 0 010-14.1h8.8v-4.9l-.8-.4h-8v-13.7l7.2.8c0 1.9 0 3.8.4 5.6h3.3v-.4c-.4-3.2-1.3-6.8.8-10.9v-1.2zm-66.2-13l-3.2 2.5v1.6c-.4 12.2-1.2 18.6-2 23.5l-4 25H56v.8l-1.6 8.1v2l7 1.2.3-1.6c.3-3.2.4-6.4.4-9.7h-1.2l-.5.4 1-5.2.3-6H64l4.8.7.8 11.7H68v1.3c-.4 3.5-1 7-1.6 10.5a86 86 0 007.3 1.6v-1.6c.4-4 .6-8.1.8-12.2H73a408 408 0 00-6.5-54.5zm36.4-3.1c-2.4-.6-4.9-.8-7.3-.8l-.4 1.6-.8 15h2.4c-.8 9.6-1.4 19.3-1.6 29 0 6.5.8 13 2 18.6l2.4 6c.8 1.7 2 2 3 2 1.1-.3 2-2 2.7-4.8l1.2-9.3c.6 5 1.6 9.8 2.8 14.6l5-2.4v-2c-1-3.5-1.7-7-2-10.6l-2 1.2c-1.4-7.2-.6-33.5 0-38.3l2.3-.4c.3-3.9 1-7.6 2-11.4-2-1-4.3-2-6.5-2.8l-.8 1.2c-.7 4.2-1.2 8.4-1.6 12.6h1.6c-1 11-1.7 22-2 33-1.2 3-2.4 4.1-3.6 4.5-.8 0-2-1.2-2.5-4-.8-2.8-.8-6.9-.8-11 .4-8.7 1-17.5 2-26.2v-1.2a244 244 0 012-14.5zm-55 15v1.5a25 25 0 011.6 6.9l2-.4c-.2 10.4-1.9 20.7-4.8 30.7-2.4-12.1-4-18.6-4.4-29h2.4v-1.7c0-1.6 0-3.6-.8-5.7l-.8-.8c-2 .6-4.3 1-6.5.8v.8l-.4 4.9v.8h1.6c.4 12.1 4 20.2 6.5 37.2v1.2h3.2c7.3-17.8 7-23.5 7.3-40.4l1.6-.8v-.8c0-2.5-.8-4.9-1.6-8.1 0-.8-.4-1.6-.8-1.2l-6 3.2zm36.4-16.3a20 20 0 00-7.7 2v2c.5 4.7 1 9.2 1.2 13.8l2-.8 1.3 44.9-2-.4v1.2l-1.3 12.9c4.4 0 8.7-.6 13-1.6v3.6l.4 1.6 2.4-2v-2a565 565 0 01-1.6-25l-2 .8v9.2h-.5c-1.8.5-3.7 1-5.6 1.3 0-21-.8-23.5-1.2-45.7h2l.4-1.2-.8-15.4zM68 146.8l-6-.4 2-13c0-2.4.8-5.6 1.6-9.3 2 7 2.8 22.7 2.8 22.7z" />
                    <path id="path21" fill="#333" d="M167.4 192.4a144 144 0 00-16-5.2l-.5 1.6c-.6 5-1 10-1.3 15h2c-.7 14.5-.3 40 1 54.5l-2-.4v1.2c.3 5.1 1 10.2 1.5 15.3 5-2.3 9.6-5 14.1-8l1.6 5.6c1.2 0 2-.8 3.3-1.2v-2c-2-7.5-3.4-15.3-4-23h-3v8.8c-2.6 1.2-5.3 2.2-8 3.3l-1.2-23 8-1.7-.3-7.2-8 .8c0-6 0-14.2.7-23.5l7.3.8v10.6l2.4.8v-.8c.2-7.5 1-15 2.4-22.3zm-56.5-7.2c-1.3.4-1.7 1.2-2.5 2.4-.6 1.3-1 2.6-1.2 4l-.8 4c-1.4 11.7-2 23.5-1.6 35.2 0 11.2.3 22.4 1.2 33.5.8 3.3 1.2 6.1 2.4 8.1.4 1.2 1.2 2 2.5 2.5 3.2 1.2 6-4 8-13 4.7-21.3 4.7-43.3 0-64.6-.7-3.6-2-7-4-10.1-1.2-2-2.8-2.9-4-2zm-29.5 18.1l-6 3.3v.8l.7 6 .4.4 2-.4-.8 33.6-2.4-.4v.4l-.4 5.6v.8l6 2.5.5-.4c.8-2.5.8-4.9.8-7v-.7h-1.7c0-12.1 1.3-22.2.5-34.8a390 390 0 014 46l3.2 1.3c3.3-10.1 7-43.6 6.5-53.3a347 347 0 01.8 45.6h-1.2v.8c-.5 3.4-1.2 6.8-2 10.1l6 3.7.4-1.6c.8-3.7 1.5-7.3 2-11l-2-.8c.8-10.5.4-35.1-.8-45.2l2-.4V207c-.5-4.4-1.3-8.7-2.4-13l-6 3.7v2c2 13-2 42.4-3.3 49.3a326 326 0 00-6.8-45.7zm51-22.6l-8.2 2.8v2l.8 15.8 2.8-.8v59.8h-2.4l-.4 1.2v15.8c2.8.3 5.6.5 8.5.4l.4-1.6-.8-17-2.5.4-.4-60.6 1.7 15.3 8.4 61.5c0 1.2.5 2 1 2l4-2v-2.9c-1.7-23-1.7-55-.9-71.5l2 .4v-1.2c.2-5.4.4-10.8.8-16.2-2.5-.7-5-1.2-7.7-1.6l-.4 1.6v15.4l2 .8c0 16.2 0 43.2 1 58.6-3.4-23-6.6-41.6-9.4-75.6zm39.1 15.8l-.9 1.2a105 105 0 00-.8 11.3h1.3c1.2 10 5.2 21.8 6.8 28.3l.4 12.5-2.4 2c.3 3.1 1 6.3 1.6 9.3l8.1-4.8-1.2-6.9v-.8l-2 .4h-.8v-12.1l.4-2c2.4-7.7 3.6-14.6 5.6-21.9h2v-.4c0-2 .4-4 1.3-5.6v-1.2l-7.3-2.5-.8 1.2c-.5 2.4-.8 4.9-.8 7.3l.4.4h2l-2.4 11.7-2 8.1c-1.3-5.6-4-13.7-4.5-21.8h2v-.4c.3-3 1-6 1.6-8.9v-.4l-7.2-4zm-59 6c.8-.4 1.6 0 2.4.8.8.8 1.6 2.5 2 4.9.4 2.4 1.2 6 1.2 9.7 1 11.2.8 22.4-.8 33.5-1.2 4.9-2.8 7.3-4.4 6.9-1.2 0-2-1.2-2.9-2.4l-1.2-5.3a147.9 147.9 0 011.6-46c.5-1.3 1.3-2 2-2z" />
                    <path id="path23" fill="#61af76" d="M99.1 85.4c-2.4.8-4 6.8-4.4 9.3l-.8 1.6 4.4 1.2v-1.2c-.8-2.9.8-11 .8-11zm85.7 14.5v2.8c0 2.5-.8 6-3.2 9-2 2.8-3.3 6-3.3 7.2 0 1.2-.8 2-2.8 1.6-3.6 0-3.6.8 0 4 1.6 1.7 3.2 4 3.2 6.1l.8 1.6a50 50 0 0128.3 6.9c8.1-3.2 8.1-10.1 13.4-10.5 3.2 0 3.2 0 .8-2.4-4-2.9-7-16.2-4-20.2 1.5-3.3 1.1-3.7-3-1.7-2.7 1.3-4 0-8-1.2a40 40 0 00-11.7-.8c-2.8.4-6.5 0-8-1.2zm-52 2l-12.7 5.3c.4.8 4 2.8 4 4 1.3-2 9.8-9.3 8.6-9.3zm-92.3 0c-.4 0 0 1.6 2.5 4.9l4.4 5.6c1.2 1.2 5-2 6.5-3.6-2 .4-5.7-.8-6.5-2.4-2-1.8-4.3-3.2-6.9-4zm109.1 27.5s0 1.6 2 4.8l4.1 4.5c1.2-1.6 4-2.8 5.3-4-6.5 0-4-2-9.3-4.9l-1.7-.4zm72.4 17.4l-4 2.4-2 .8 1.5 4c0-.8.8-1.2 1.6-2 2.5-2.4 4-5.2 3-5.2zm-194.8.4l-.8.4c-.8 1.6 2 2 4.5 3.2l5.2 2-.8-4c-1.2.8-6-1.6-8-1.6zm116 8.9c-2.5-.4 5.6 8 5.6 8 .4.4.4.4 1.2-4.8-1.2.8-2.8-1.6-6-3.2a4 4 0 00-.8 0zM48.6 177l-2 4-6.5 7.7 9.7-6c2-1.3 2-2.9 3-3.7zm163 7.2l-4.6 7c1.6-.5 2.4 0 4 1.1 5.3 3.3 7.3 2.5 3.3-1.6-2.8-3.6-4.9-2.8-2.8-6.5zm-142.4 34c-.8 3.2-1.6 2.8-7.2 2.4 0 0-5.7-1.2-6.5.4 0 1.2 5.7 3.2 5.7 3.2 4 2 5.6 2.5 7.2 8.1v-3.6c0-3.2 0-6.9.8-10.5zm130.5 9.7v1.2l-.4 6c1.2-1.2 8.1 2.5 9.7 2.5h3.7l-4-4c-1.3-1.3-8.2-4.1-9-5.7zm-124.4 31c0 1.3-6 3-8 3-1.3 0-2.5.7-3 1.5-.7 1.2 1 1.2 4.5.8 2.5-.4 10.1-2.4 11.3-2-.8-1.2-4-2-4.8-3.2zm119.2 4.1c-1.2 2-4 2.5-4.9 4 1.3 0 7 2.9 9.7 3.7 7.3 1.6 8.1.4 1.7-3.2-2-.8-6-3.7-6.5-4.5z" />
                </g>
            </svg>
        </label>
        <div class="usp_blurb">
            <div class="column">
                <h3 class="usp_subtitle">Value For Money</h3>
                <p>
                    No agency overheads means your budget goes on getting work done, not keeping the A/C running.
                </p>
                <label for="usp_value" class="usp_button red">Back</label>
            </div>
        </div>
    </div>





    <input type="checkbox" class="usp_state" id="usp_aftercare" />
    <div class="usp_card" style="--grid_area: f;">
        <label for="usp_aftercare" onclick="toggleCheckboxes('usp_state');" class="usp_cactiWrap">
            <svg class="usp_cacti" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 250 350">
                <g id="cacti_aftercare">
                    <path id="path42" fill="#de7c61" d="M82.5 285.8v4.4c0 4.9 0 4.9 4 4.9 4.5 0 4.5 0 6.5 11.3.8 4 2.8 9.3 4.4 12l3.3 4.5 3.2-4c2-2.4 4-4 4-2.8l3.3 4 2 2.8 2.8-4 3.3-4 3.2 4 3.2 4 2-2.8 3.3-4c0-.8 2 .4 4 2.8l3.3 4 2.8-4 3.2-4 2.8 4 3.3 4 2.8-3.6c1.2-1.6 3.6-7.7 4.9-13.3 2.4-10.1 2.4-10.5 6.4-11 3.7 0 3.7-.4 3.2-4.4v-4.4l-13-.4h-1.1zm24.6 33.5l-3.2 4-3.2 4-1.6-2.4c-3.3-6 4.4 25.1 4.4 25.1h42.8l3.2-11c4-14.9 5.3-16 2.5-13.6-2 1.6-2.4 1.6-4.5-1.7l-3.2-4-3.2 4-2.8 3.7-3.3-4-3.2-4.1-3.2 4-3.3 4-2.4-4-2.8-3.2c-.8 0-2.4 1.6-4 3.6l-3 3.7-2.7-4z" />
                    <path id="path44" fill="#61af76" d="M127.8 31.6c-5.3 0-9.7 1.6-14.6 4.9l-7 4.8-4.8-4c-6-4.5-6.5-3.7-1.2 4 3.2 4.9 3.6 6.5 2 9.7-1.1 6-1.7 12-1.6 18.2 0 13-1.1 16.2-3.6 12.1-.4-.8-1.6-1.2-2.4-1.2-.8 0 0 2.4 2.4 5.7 3.3 5.2 4 9.3 5.7 27.4 2 26.7 2 24.3-.8 23.5-2.8-1.2-2.8-.8.8 5.6 2 4 3.2 9.7 4 20.2.4 13.4.4 13-2.4 15.8-3.6 3.6-4.4 3.6-10 1.2l-1-.4c2.4 1.6 6 3.6 9.7 4.8 1.6.9.8 4.5.4 7.3 8 4.9 33.1.8 46-3.2v-10.1c0-5.7 1.3-5.7 3-7.3a14 14 0 004-5.2c2-3.3 2-3.3-2.5 0l-4 2.4v-5.3c0-2.8 1.6-6 2.8-16.1 2-15 3.3-20.2 5.8-22.7 4-4 4-5.6.7-4.4-2.4.8-2.4-.8-1.6-16.2.9-12.9 2-19 4-22.6 4-6 4-8 0-4.8-2.7 2.8-2.7 2.4-3.5-9a72.7 72.7 0 00-3.3-17.3c-2-4.8-2-5.7.7-9.3 4-4.4 2.6-6-2-2-2.7 2-4 2.4-6 .8a34 34 0 00-20.2-7.3zM28 107.2l-2 5.6-5.3 6.9c2.8-1.2 6-2 9.7-2 2.8 0 5.2 0 8 .8l-5.2-.8c-4 0-4.9-.8-4.9-5.3zM194.8 97c.7 0-.9 2 0 5.2 0 4 0 5.3-2 8.1 3.1-1.6 6.4-2.4 10.4-2.4-3.5-.8-4.3-2-5.6-6-1.2-3.3-3.6-5-2.8-5zM71 129.3l-4 2.8c-1.6 1.6-2.4 2-3.6 0 1.6 3.3 2 6.9 2 10.5a39 39 0 013.7-8c2.4-3.3 2-4 2-4.9zm173.7-24.1s-1.3.4-2.5 2L240 110l2.8 4 .9-2.8c1.6-4 2-6 1.2-6zM5.2 129c-.8 0 0 1.6 3.8 5.7 2 2.8 3.1 4.4 4 6.8v-8l-3.3-2-4-2.5zm166.6 12.1c.3 1.2.7 1.6 5.1 6.9 2 2.4 4 2.8 5.7 4 1.2-2.8.8-6 1.6-8.9l-3.2 1.7-5.7-2.5c-1.6-.8-2.8-2.4-3.6-1.2zm-91 16.2c-.7 0-2.3.8-4.4 2.8-2.5 1.6-4 2.8-5.3 2.4a14 14 0 002.8 4.9l.4.8 4-4.9c3-4 3.7-6 2.5-6zm86.5 9.7c-1.7 0 0 2 4.4 5.6 2.5 2 1.7 3.3 2 4 1.3-1.1 4-2.8 4-4.8l-6.3-3.2c-1.4-.8-2.7-1.3-4-1.6zm-152.8 1.2l-3.1 1.2s-6 0-6.5 1.6c0 1.2 6.9 2 6.9 2 1.2 0 2.4 2.5 3.6 4.9zm215.9 16.1c0 2.9-3 5.3-3.3 8.1.8-.8 4-1.2 6.5-2 6.5-2 7.3-4.4 1.2-3.6l-4.5.8zm-202 17.8L27 205c-3.2 6.8-2.8 7.6 2 2.8l2.9-2.4c-1.4-1-2.8-2.1-4-3.3zM200 225.6c-13.4 7.6-4.5 4-5 4 0 0 10.2 7.3 13 5.7 2.5-1.3-4.4-7-4.4-7zm-135.8 6c2 1.6 1.6 4-.8 8.5-2.8 6-.4 6 4 .4l5.3-7.3zm36.4 17l.8 13.7-6 2.4-6.1 2.9h13.3v9.3l-.4 8.9H152V278c0-8.1 0-9 5.5-11 7.3-3.2 7-4.8 0-3.2l-6 .8.8-5.6c.8-6 0-12.1.4-16.6-15.3 4.5-42 5.7-52.4 6z" />
                    <path id="path46" fill="#333" d="M225.4 115.3l-.4.4-.4 4c0 .8 0 1.2.8 1.2h3.3v13.8l-12.1-.9.8-12v-.9h-4.8l-.8.4v12.1h-11.4v-12h5.2l.4-.5.4-4-.4-.8-9.3-.8-.8.8-.4 25 .4.4 4.5.8c.4 0 .8 0 .8-.8v-2.8l27 1.2-.8 3.2.4.4 5 .4.3-.4.8-22.6h2v-5.6zm-204 10.5h-.8l.4 11.3v.4h4.8v-3.7l7.3 2V148l-6.9 2.4v-3.2h-.8l-4-.8-.4.4v12.5h4.4c.4 0 .8 0 .8-.8v-2l32.4-11 .4-.3v-5.7c0-.4 0-.8-.8-.8L26.6 129v-2.8h-.8zm16.2 11.3l16.1 4.4-16 5.3zm164 9.3h-1.2c-4.9.8-8 4.4-9.7 11.3-1 5-1.5 10.2-2 15.3h4.9v-.8l.8-2.4 26.3 6.5-.8 2.8v.8l4.8 1.6h.8l2.9-12.5v-.8l-5-.8h-.3l-.8 3.6-10.5-2.8 1.2-4.9 17.4-4.4.4-.8 1.6-6.9c0-.4 0-.8-1.2-1.2l-4-.8-1 .4-.3 4.4-12 4c.3-2.7 0-4.8-1.7-6.8l-2.4-2.4-4-1.6zm0 6h2.8c2 .8 3.7 2 4 4l.5 2.9-.4 4-1.3 4-12-2.7 1.1-7c.4-2 1.2-3.6 3-4.4l2.7-.8zm-145.9.8l-4.8 1.2v.9l1.2 2.8-26.3 9.3-.8-3.3h-.8l-4 1.7h-.4v.8l5.2 14.1h.8l4-1.6v-.8l-2.3-6 11-3.3 4 12.1h.3l4-1.2v-.4l-4-12.1 11.3-4L57 173l-3.2 1.2c-.4 0-.8.5-.4 1.3l1.6 4 .8.4 9.3-4.8c.4 0 .8 0 .4-.4l-1.6-4H63l-1.2.3-5.7-17.4h-.4zm129.3 23l-4 4.1v1.2l14.5 30-1.6 1.5-.4.8 3.2 3.3c0 .4.4.4.8 0l7.7-7.7v-.8l-2.8-2.4h-.8l-2 2-3.7-6.5 9.3-8 6 2.8-2 2v1.2l2 2.8.5.4h.8l8-8 .5-.5v-.8l-2.8-2.8H217l-1.6 1.6-29.9-16.1zm-119.6 1.3l-8 9.3v.8l4 2.4h.8l3.2-4 5.3 3.6L54.5 211l-4-3.2-3.7 4v.8l12.2 9h.8l2.8-4.1-4-2.9 16.1-21.8 5.7 4-4 5v.3l3.2 2.9h.4l7.7-8.1v-.8l-4-2.5-15.4-12h.4c.4-.5 0-.9 0-.9l-2.9-3.2zm120.8 5.2l15 8.1-7.2 6.9zm-12 1.6h-.4l-4 2.9c-2 0-4 .8-7 2-4 1.6-6.5 4.4-7.7 8-1.1 4.1 0 9.4 2.5 15.4a27 27 0 009.3 12.1c2 1.3 4 2 5.7 2 2 0 4-.3 6.5-1.5a14 14 0 006-4.5l.4.8c.4.4.8.8 1.6.4l3.7-2s.3-.4 0-.8l-4.6-8c0-.9-.3-.9-.7-.9l-3.7 2.4v.8l1.2 3.3c-1.4 1.2-3 2.2-4.8 2.8-1.3.6-2.7 1-4 1.2-4 0-8.2-3.2-11.4-10.5-2-4.4-2.8-8-2.4-10.9.4-1.2.8-2.4 2-3.2.8-1.2 2-2 3.6-2.9l5.3-1.6 3.2 5.7.8.4 3.7-1.6s.4-.4 0-.8l-4-10.1zm-84 13v.4l-1.6 4.4.4.8h3.2l-5 27.1-2.7-1.2-.4.4-1.2 4.8.4.4 22.2 3.7v2l4.9 1.2.8-.4 1.2-10.5h-.4l-4-1.2c-.5 0-1 0-1.3.8l-.4 3.2-13.3-2 2-11.3 12 2 1-.4.4-4-.4-.8-12.2-1.7 1.6-11.4 12.2 1.7-.8 4v.8l4.4.8h.4l2.4-9.3c0-.4 0-.8-.8-.8l-24.6-3.6zm48.5.4c-6.6 1.1-13 2.8-19.4 4.8l1.2 4v.5h1.2c.8 0 1.6 0 2.8-.8l4.9 26.6-3.4.4v5.7l.8.4 12.2-2.4.8-.4-1.2-4.9h-.3l-3.4.4-2-10.5c1.2 0 3.2 0 5-.8l11.2 13.7.9.5 6.8-1.7c.8 0 .8-.4.8-1.2l-.8-4-.8-.8-4.4 1.2-8-8.9c2-.8 4-2.4 5.2-4.4l1.1-3.7V207l-2-4.9c-2-2.8-4.9-4-9.3-4.4zm-.4 5.2c1.1 0 2.3 0 3.1.8 1.2.8 2 2.5 2.4 4.5.4 2.4 0 4-1.2 5.6a8 8 0 01-2.3 1.7l-4 .8-4.2.8-2.7-12.1c2.8-.9 5.8-1.6 8.8-2z" />
                    <path id="path48" fill="#e2e542" d="M149.6 42.1c-1.2 0-1.6 6.9-3.7 6.5-2-.4-11.3-7.3-6 1.2 2.8 2.8.8 3.6-3 4-6.3.4-5.1 1.7-1.1 3.3 3.7 2 2.5 3.2 0 4.8-4 2.9-2.8 4.9 4.5 2 3.6-.4 3.6 5.3 6 7.3 2.9-2.8 0-7.7 2-8 1.3 0 6 5.2 8 4-.7-3.7-1.5-3.3-2.7-6-.4-2.1 4.5-1.7 8-3.7 4-2 5.3-2.8-1.1-3.7-2 0-3.3 0-4-.8v-.8c0-.4 0-1.2 1-2 5.8-4.8 0-4-5.5-1.2-1.2-1.2-1.2-2.8-1.2-4.4zM118.5 108l-3 3.2-2.7 2.8h-.8l-1.2-2c-1.6-7.7-3.3-2-4 4-1.7 0-3 0-4.1-1.1-8-1.7 2.8 4 1.2 6-1.6 1.6-12.1 6-2 6 3.6-1.1 3.2.9 1.6 4.1-2.4 6-1.2 5.7 2.4 3.2 3.7-2.4 4-.8 4 2.5.5 4.8 2.9 4.4 4-3.3 1.3-3.2 6 0 9.4-1.6-.8-3.6-6.5-3.6-5.6-5.2 0-1.2 7.2-2.9 7.6-5.3-4-1.2-4-.4-6.8-.8-2.5-.4.4-4.4.8-8.5 0-2.4 0-4-.8-4z" />
                </g>
            </svg>
        </label>
        <div class="usp_blurb">
            <div class="column">
                <h3 class="usp_subtitle">Aftercare</h3>
                <p>
                    I build servers from bare metal, engineering my own stacks with turbo-tuned http configs, ultra-hardened SSL and caching that serves the user the page before they click the button (literally). I also serve your website fast, reliably, and without you having to worry about what any of that means. I now operate my own hosting network in London as part of the UK's first 100% renewable energy driven server farm, so you can rest easy, knowing your website is powered by sustainably-farmed buttercups*.
                    <br><br>
                    *not powered by buttercups, but planet-friendly and wonderful none the less.
                </p>
                <label for="usp_aftercare" class="usp_button red">Back</label>
            </div>
        </div>

    </div>
</div>


<div class="landing_backdrop">

    <img class="usp_wall" alt="SVG background image of rustic spanish bricks in a simple cartoon style" src="<?php echo get_bloginfo('template_url') ?>/imagery/usp_cacti/wall.svg"/>

</div>
