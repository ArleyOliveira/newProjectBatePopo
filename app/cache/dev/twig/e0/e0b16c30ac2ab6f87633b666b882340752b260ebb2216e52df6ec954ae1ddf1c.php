<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34197edb3a485aa71f4f001545e8d497ad56722649e5e94e4999e941e013eb95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_534a7a52e0fa1e8a60514464dca0405f999c20c65d18f0d0493077aefdd9edf5 = $this->env->getExtension("native_profiler");
        $__internal_534a7a52e0fa1e8a60514464dca0405f999c20c65d18f0d0493077aefdd9edf5->enter($__internal_534a7a52e0fa1e8a60514464dca0405f999c20c65d18f0d0493077aefdd9edf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_534a7a52e0fa1e8a60514464dca0405f999c20c65d18f0d0493077aefdd9edf5->leave($__internal_534a7a52e0fa1e8a60514464dca0405f999c20c65d18f0d0493077aefdd9edf5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4e87e8ff9fecaea1ae630553b79a09e9017e21f0d3132415ae9f633b668e96d = $this->env->getExtension("native_profiler");
        $__internal_a4e87e8ff9fecaea1ae630553b79a09e9017e21f0d3132415ae9f633b668e96d->enter($__internal_a4e87e8ff9fecaea1ae630553b79a09e9017e21f0d3132415ae9f633b668e96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a4e87e8ff9fecaea1ae630553b79a09e9017e21f0d3132415ae9f633b668e96d->leave($__internal_a4e87e8ff9fecaea1ae630553b79a09e9017e21f0d3132415ae9f633b668e96d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a8eb48c1b075e3ed4777f620bed70ea4bc5eb159694141c23ae8fb16cf3d2c4 = $this->env->getExtension("native_profiler");
        $__internal_5a8eb48c1b075e3ed4777f620bed70ea4bc5eb159694141c23ae8fb16cf3d2c4->enter($__internal_5a8eb48c1b075e3ed4777f620bed70ea4bc5eb159694141c23ae8fb16cf3d2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a8eb48c1b075e3ed4777f620bed70ea4bc5eb159694141c23ae8fb16cf3d2c4->leave($__internal_5a8eb48c1b075e3ed4777f620bed70ea4bc5eb159694141c23ae8fb16cf3d2c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8aa65a6a04389e51ee6da525a5d0c08ff408602bf4dca6c7d0dd4b10e2af108c = $this->env->getExtension("native_profiler");
        $__internal_8aa65a6a04389e51ee6da525a5d0c08ff408602bf4dca6c7d0dd4b10e2af108c->enter($__internal_8aa65a6a04389e51ee6da525a5d0c08ff408602bf4dca6c7d0dd4b10e2af108c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8aa65a6a04389e51ee6da525a5d0c08ff408602bf4dca6c7d0dd4b10e2af108c->leave($__internal_8aa65a6a04389e51ee6da525a5d0c08ff408602bf4dca6c7d0dd4b10e2af108c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
