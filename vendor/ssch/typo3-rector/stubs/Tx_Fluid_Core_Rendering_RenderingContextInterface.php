<?php

namespace RectorPrefix20211102;

if (\interface_exists('Tx_Fluid_Core_Rendering_RenderingContextInterface')) {
    return;
}
interface Tx_Fluid_Core_Rendering_RenderingContextInterface
{
}
\class_alias('Tx_Fluid_Core_Rendering_RenderingContextInterface', 'Tx_Fluid_Core_Rendering_RenderingContextInterface', \false);
