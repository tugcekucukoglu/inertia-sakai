<script setup lang="ts">
import FeaturesWidget from '@/Components/landing/FeaturesWidget.vue';
import FooterWidget from '@/Components/landing/FooterWidget.vue';
import HeroWidget from '@/Components/landing/HeroWidget.vue';
import HighlightsWidget from '@/Components/landing/HighlightsWidget.vue';
import PricingWidget from '@/Components/landing/PricingWidget.vue';
import TopbarWidget from '@/Components/landing/TopbarWidget.vue';
</script>

<template>
    <div class="bg-surface-0 dark:bg-surface-900">
        <div id="home" class="landing-wrapper overflow-hidden">
            <div class="py-6 px-6 mx-0 md:mx-12 lg:mx-20 lg:px-20 flex items-center justify-between relative lg:static">
                <TopbarWidget />
            </div>
            <HeroWidget />
            <FeaturesWidget />
            <HighlightsWidget />
            <PricingWidget />
            <FooterWidget />
        </div>
    </div>
</template>
