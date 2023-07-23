<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'forms::components.field-wrapper.index','data' => ['id' => $getId(),'label' => $getLabel(),'labelSrOnly' => $isLabelHidden(),'helperText' => $getHelperText(),'hint' => $getHint(),'required' => $isRequired(),'statePath' => $getStatePath()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms::field-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getId()),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getLabel()),'label-sr-only' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isLabelHidden()),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getHelperText()),'hint' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getHint()),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isRequired()),'state-path' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getStatePath())]); ?>
    <div
        x-data="{

            location: $wire.entangle('<?php echo e($getStatePath()); ?>'),
            fgm: {},
        }"

        id="<?php echo e($getId() . '-alpine'); ?>"

        x-init="
            (async () => {
                <?php if($mapsHasCss()): ?>
                    if(!document.getElementById('filament-google-maps-css')){
                        const link  = document.createElement('link');
                        link.id   = 'filament-google-maps-css';
                        link.rel  = 'stylesheet';
                        link.type = 'text/css';
                        link.href = '<?php echo e($mapsCssUrl()); ?>';
                        link.media = 'all';
                        document.head.appendChild(link);
                    }
                <?php endif; ?>
                <?php if($mapsHasJs()): ?>
                    if(!document.getElementById('filament-google-maps-js')){
                        const script = document.createElement('script');
                        script.id   = 'filament-google-maps-js';
                        script.src = '<?php echo e($mapsJsUrl()); ?>';
                        document.head.appendChild(script);
                    }
                 <?php endif; ?>

                do {
                    await (new Promise(resolve => setTimeout(resolve, 100)));
                } while (window.filamentGoogleMaps === undefined);
                fgm = filamentGoogleMaps($wire, <?php echo e($getMapConfig()); ?>);
                fgm.init($refs.map, $refs.pacinput);
            })()

            $watch('location', value => fgm.updateMapFromAlpine())
        "
         wire:ignore
    >
        <?php if($isSearchBoxControlEnabled()): ?>
            <input x-ref="pacinput" type="text" placeholder="Search Box"/>
        <?php endif; ?>

        <div
            x-ref="map"
            class="w-full" style="height: <?php echo e($getHeight()); ?>; min-height: 30vh; z-index: 1 !important;">
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH D:\1\altin\vendor\cheesegrits\filament-google-maps\src\/../resources/views/fields/filament-google-maps.blade.php ENDPATH**/ ?>