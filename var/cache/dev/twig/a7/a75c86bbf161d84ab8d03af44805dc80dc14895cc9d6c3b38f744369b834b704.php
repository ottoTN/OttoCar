<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_94cec3a1329483b9b81c40e1fe17ec6c1a16bd3c4a9aeeffa9534b0e3e3a164e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb0b0fbfa87ca2d311296d20efd59c8a1184f74a2bcdd224a84ce7aa3db5f784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0b0fbfa87ca2d311296d20efd59c8a1184f74a2bcdd224a84ce7aa3db5f784->enter($__internal_fb0b0fbfa87ca2d311296d20efd59c8a1184f74a2bcdd224a84ce7aa3db5f784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_fcc1f58fcaf256a0c897131ef2dc98f514ca30eb6b391889d7da17a5e0784204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc1f58fcaf256a0c897131ef2dc98f514ca30eb6b391889d7da17a5e0784204->enter($__internal_fcc1f58fcaf256a0c897131ef2dc98f514ca30eb6b391889d7da17a5e0784204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fb0b0fbfa87ca2d311296d20efd59c8a1184f74a2bcdd224a84ce7aa3db5f784->leave($__internal_fb0b0fbfa87ca2d311296d20efd59c8a1184f74a2bcdd224a84ce7aa3db5f784_prof);

        
        $__internal_fcc1f58fcaf256a0c897131ef2dc98f514ca30eb6b391889d7da17a5e0784204->leave($__internal_fcc1f58fcaf256a0c897131ef2dc98f514ca30eb6b391889d7da17a5e0784204_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
