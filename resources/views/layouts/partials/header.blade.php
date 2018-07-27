<toggle-menu inline-template>
	<div class="bg-blue-darkest w-full fixed z-50 pin-t overflow-hidden shadow-md" id="header">
		<div class="container px-8 py-3 lg:py-0 lg:h-16 relative z-10 flex flex-wrap items-center justify-between relative">
			<div class="w-full lg:w-auto lg:flex lg:h-16">
				<a href="{{ route('home') }}" class="w-full lg:w-auto no-underline flex items-center lg:justify-center text-white hover:text-blue-lighter scale transition mb-2 mr-8 tracking-wide">
					<div class="h-8">
						@svg('dagcoin', ['class' => 'w-8 h-8'])
					</div>

					<h1 class="pl-4 text-xl">XDAG Block Explorer</h1>
				</a>

				<a href="{{ route('mining calculator') }}" :class="{ 'hidden lg:flex': !shown, 'flex': shown }" class="hidden lg:flex w-full lg:w-auto no-underline lg:border-b-2 {{ \App\Support\ActiveNavigationLink::checkRoute('mining calculator') ? 'text-white border-blue' : 'text-grey-dark border-transparent' }} hover:text-white tracking-wide font-bold text-sm py-3 mr-8 items-center justify-center">
					<span class="mr-2">
						@svg('calculator')
					</span>

					<span>Mining calculator</span>
				</a>

				<a href="{{ route('balance checker') }}" :class="{ 'hidden lg:flex': !shown, 'flex': shown }" class="hidden lg:flex w-full lg:w-auto no-underline lg:border-b-2 {{ \App\Support\ActiveNavigationLink::checkRoute('balance checker') ? 'text-white border-blue' : 'text-grey-dark border-transparent' }} hover:text-white tracking-wide font-bold text-sm py-3 items-center justify-center">
					<span class="mr-2">
						@svg('wallet')
					</span>

					<span>Balance checker</span>
				</a>
			</div>

			<div :class="{ 'hidden lg:flex': !shown }" class="hidden lg:flex flex-1 mt-4 lg:mt-0 items-center justify-end">
				<form action="{{ route('block search') }}" method="POST" class="w-full lg:w-3/4">
					{{ csrf_field() }}

					<div class="w-full flex">
						<input type="text" name="search_address_or_hash" class="w-full text-md text-grey-darkest bg-white px-4 py-3 rounded-lg rounded-r-none outline-none" placeholder="View address / block hash">
						<button type="submit" class="button primary w-auto text-md font-bold py-3 px-4 rounded-lg rounded-l-none">
							@svg('search', ['class' => 'stroke-current w-5 h-5'])
						</button>
					</div>
				</form>
			</div>

			<div class="absolute z-10 pin-r pin-t h-16 px-4 text-white lg:hidden flex items-center cursor-pointer" @click="toggleMenu">
				@svg('menu', ['class' => 'stroke-current w-6 h-6'])
			</div>
		</div>
	</div>
</toggle-menu>