<section class="section_team4 color-scheme-4 bg-light-cream">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-large">
                            <div class="team4_component">
                                <div class="margin-bottom margin-xxlarge">
                                    <div class="max-width-large">
                                        <div class="margin-bottom margin-xsmall">
                                            <div class="text-style-tagline">Tagline</div>
                                        </div>
                                        <div class="margin-bottom margin-small">
                                            <h2 class="heading-style-h2">Our team</h2>
                                        </div>
                                        <p class="text-size-medium">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. </p>
                                    </div>
                                </div>
                                <div class="team4_list-wrapper">
                                    <div class="w-layout-grid team4_list">

                                       <?php
                                        $team = [
                                        [
                                            'name'  => 'Raul',
                                            'role'  => 'Frontend',
                                            'image' => 'portrait-raul.webp',
                                        ],
                                        [
                                            'name'  => 'Bree',
                                            'role'  => 'UX/UI',
                                            'image' => 'portrait-bree-1.webp',
                                        ],
                                        [
                                            'name'  => 'Pancho',
                                            'role'  => 'Backend',
                                            'image' => 'portrait-francisco.webp',
                                        ],
                                        [
                                            'name'  => 'Oscar',
                                            'role'  => 'Frontend',
                                            'image' => 'portrait-oscar.webp',
                                        ],
                                        [
                                            'name'  => 'Esmeralda',
                                            'role'  => 'QA',
                                            'image' => 'portrait-esme.webp',
                                        ],
                                        [
                                            'name'  => 'Julio',
                                            'role'  => 'Accesibility',
                                            'image' => 'portrait-julio.webp',
                                        ],
                                        [
                                            'name'  => 'Luis',
                                            'role'  => 'Frontend',
                                            'image' => 'portrait-luis.webp',
                                        ],
                                        [
                                            'name'  => 'Sofia',
                                            'role'  => 'Frontend',
                                            'image' => 'portrait-sofia.webp',
                                        ],
                                        [
                                            'name'  => 'Andrea',
                                            'role'  => 'Backend',
                                            'image' => 'portrait-andrea.webp',
                                        ],
                                        [
                                            'name'  => 'Paul',
                                            'role'  => 'Content, QA',
                                            'image' => 'portrait-paul.webp',
                                        ],
                                        [
                                            'name'  => 'Rob',
                                            'role'  => 'PM, Backend',
                                            'image' => 'portrait-rob.webp',
                                        ],
                                        [
                                            'name'  => 'Alex',
                                            'role'  => 'Design',
                                            'image' => 'portrait-mondra.webp',
                                        ],
                                        ];

                                        foreach ($team as $member): ?>
                                        <div class="team4_item">
                                            <div class="team4_image-wrapper">
                                            <img
                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-members/<?php echo esc_attr($member['image']); ?>"
                                                alt="<?php echo esc_attr($member['name']); ?>"
                                                class="team4_image object-cover object-top"
                                            />
                                            </div>

                                            <div class="team4_title-wrapper">
                                            <div class="text-size-large"><?php echo esc_html($member['name']); ?></div>
                                            <div class="text-size-medium"><?php echo esc_html($member['role']); ?></div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
   
                                    </div>
                                </div>
                                <div class="margin-top margin-xxlarge">
                                    <div class="max-width-medium">
                                        <div class="margin-bottom margin-xsmall">
                                            <h3 class="heading-style-h4">We&#x27;re hiring!</h3>
                                        </div>
                                        <p class="text-size-medium">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.</p>
                                        <div class="margin-top margin-medium">
                                            <div class="button-group"><a href="#"
                                                    class="button is-secondary w-button">Open positions</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>