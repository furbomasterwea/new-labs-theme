<link
  rel="preload"
  as="image"
  href="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"
/>
<section id="relume" class="overflow-hidden px-[5%] py-16 md:py-24 lg:py-28">
  <div class="container">
    <div
      slotName="block-7"
      class="mx-auto mb-12 w-full max-w-lg text-center md:mb-18 lg:mb-20"
    >
      <h2
        elementName="heading"
        class="heading-style-h2"
      >
        Client stories
      </h2>
      <p elementName="heading-paragraph" class="text-size-medium">
        Real results from businesses we've transformed
      </p>
    </div>


    
      <div
        class="relative overflow-hidden"
        role="region"
        aria-roledescription="carousel"
      >
        <div class="relative">
          <div>
            <div class="flex ml-0 md:mx-3.5">
              <div
                role="group"
                aria-roledescription="slide"
                class="min-w-0 shrink-0 grow-0 basis-full pl-0 md:basis-1/2 md:px-4 lg:basis-1/3"
               >

               
                  <?php 
                  $client_story =[
                    [
                    'paragraph'=>'Aviada is simply outstanding. Their professionalism and seamless collaboration with marketing, DevOps, product, and tech teams has empowered us to efficiently manage multiple web properties.',
                    'name'=>'Anita Kumar',
                    'role'=>'Sr. Director, Product Marketing & Growth at Talent Systems',
                    'icon'=>'',
                    ]
                   
                  ];
                  ?>


                  <?php foreach ($client_story as $story): ?>
                <div
                  class="flex w-full flex-col items-start justify-between border-2 border-black rounded-xl p-6 md:p-8"
                 >


                  <div class="mb-5 flex md:mb-6">
                    <svg
                      stroke="currentColor"
                      fill="currentColor"
                      stroke-width="0"
                      viewBox="0 0 24 24"
                      class="size-6"
                      height="1em"
                      width="1em"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                    <?php for ($i = 0; $i <5; $i++) : ?> 
                      <path
                        d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"
                      ></path></svg><svg
                      stroke="currentColor"
                      fill="currentColor"
                      stroke-width="0"
                      viewBox="0 0 24 24"
                      class="size-6"
                      height="1em"
                      width="1em"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                     <?php endfor; ?>
                    </svg>
                  </div>

                  <p class="text-size-medium">
                    <?php echo esc_attr($story['paragraph']); ?></php>
                  </p>
                  <div
                    class="mt-5 flex w-full flex-col items-start gap-4 md:mt-6 md:w-auto md:flex-row md:items-center"
                  >
                    <div>
                      <img
                        src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image.svg"
                        alt="Testimonial avatar 1"
                        class="size-12 min-h-12 min-w-12 rounded-full object-cover"
                      />
                    </div>
                    <div>
                      <p class="font-semibold"><?= esc_attr($story['name']);?></p>
                      <p><?= esc_attr($story['role']);?></p>
                    </div>
                  </div>
                </div>
                <?php endforeach ?>

              </div>
              <div
                role="group"
                aria-roledescription="slide"
                class="min-w-0 shrink-0 grow-0 basis-full pl-0 md:basis-1/2 md:px-4 lg:basis-1/3"
              >
              </div>
            </div>
          </div>
       
          <button
            class="focus-visible:ring-border-primary gap-3 items-center justify-center whitespace-nowrap 
            ring-offset-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2
             disabled:pointer-events-none disabled:opacity-50 absolute size-14 rounded-full bg-neutral-white
              border border-border-primary p-3 left-0 top-1/2 -translate-y-1/2 hidden md:flex md:size-12 lg:size-14"
          >
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 24 24"
              class="size-6"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"
              ></path></svg><span class="sr-only">Previous slide</span></button>
            
            <button
            class="focus-visible:ring-border-primary gap-3 items-center justify-center whitespace-nowrap ring-offset-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-border-primary text-text-primary absolute size-14 rounded-full bg-neutral-white right-0 top-1/2 -translate-y-1/2 hidden md:flex md:size-12 lg:size-14"
            disabled=""
          >
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 24 24"
              class="size-6"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"
              ></path></svg><span class="sr-only">Next slide</span>
          </button>
        </div>
        

        
        <div class="mt-[30px] flex items-center justify-center md:mt-[46px]">
          <button
            class="mx-[3px] inline-block size-2 rounded-full bg-neutral-light"
          ></button
          ><button
            class="mx-[3px] inline-block size-2 rounded-full bg-neutral-light"
          ></button
          ><button
            class="mx-[3px] inline-block size-2 rounded-full bg-neutral-light"
          ></button
          ><button
            class="mx-[3px] inline-block size-2 rounded-full bg-neutral-light"
          ></button
          ><button
            class="mx-[3px] inline-block size-2 rounded-full bg-neutral-light"
          ></button
          ><button
            class="mx-[3px] inline-block size-2 rounded-full bg-neutral-light"
          ></button>
        </div>
      </div>



  </div>
</section>