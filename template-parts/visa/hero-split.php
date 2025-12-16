<section class="min-h-screen w-full flex items-center justify-center p-4 md:p-8 bg-aviada-dark-blue text-white ">
  <div class="bg-aviada-dark-blue w-full max-w-7xl h-auto min-h-[600px] lg:min-h-[85vh] rounded-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-2 border-2 border-white p-4">
    <div class="relative order-last w-full sm:col-span-2 lg:order-none lg:col-span-1 flex items-center">
      <img 
        src="<?= get_stylesheet_directory_uri();?>/images/A-Programmer-Clicks-On-The-Code.png"
        alt="Hero image"
        class="h-auto w-full rounded-image object-cover"
      />
    </div>

    <div class="flex flex-col justify-center p-8 md:p-12 lg:p-16 bg-aviada-dark-blue text-white">
      <div class="flex items-start gap-4 mb-6">
        <div class="w-14 h-14 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
          <img src="AQUI-TU-ICONO.svg" alt="Icon" class="w-7 h-7" />
        </div>
        <div>
          <h3>Business impact metrics</h3>
          <p>Quantify the hidden costs of development delays and operational inefficiencies</p>
        </div>
      </div>

      <div class="flex items-start gap-4 mb-6">
        <div class="w-14 h-14 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
          <img src="AQUI-TU-ICONO.svg" alt="Icon" class="w-7 h-7" />
        </div>
        <div>
          <h3>Revenue disruption</h3>
          <p>Missed market opportunities create cascading financial consequences for your business</p>
        </div>
      </div>
      
      <div class="flex items-start gap-4 mb-8">
        <div class="w-14 h-14 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
          <img src="AQUI-TU-ICONO.svg" alt="Icon" class="w-7 h-7" />
        </div>
        <div>
          <h3>Operational strain</h3>
          <p>Technical bottlenecks drain resources and create unsustainable team pressure</p>
        </div>
      </div>

      <div class="flex flex-wrap gap-4 mt-4">
        <button class="button is-secondary is-alternate w-button">
          Analyze
        </button>

        <button class="button is-link is-icon is-alternate w-inline-block flex items-center gap-1">
          Explore
          <svg
            stroke="currentColor"
            fill="none"
            stroke-width="0"
            viewBox="0 0 15 15"
            height="1em"
            width="1em"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M6.1584 3.13508C6.35985 2.94621 6.67627 2.95642 6.86514 3.15788L10.6151 7.15788C10.7954 7.3502 10.7954 7.64949 10.6151 7.84182L6.86514 11.8418C6.67627 12.0433 6.35985 12.0535 6.1584 11.8646C5.95694 11.6757 5.94673 11.3593 6.1356 11.1579L9.565 7.49985L6.1356 3.84182C5.94673 3.64036 5.95694 3.32394 6.1584 3.13508Z"
              fill="currentColor"
            ></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>
