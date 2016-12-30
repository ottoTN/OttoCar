<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_42c7f4aea4086b4a8355f2def6230444df1d7c08f9d6e1a4cf1974724ea98bbb extends Twig_Template
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
        $__internal_cfdc5745e07efb0136ac239a2feb8a81fb235923f8c2ac8bf7f697ec1ad0c760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfdc5745e07efb0136ac239a2feb8a81fb235923f8c2ac8bf7f697ec1ad0c760->enter($__internal_cfdc5745e07efb0136ac239a2feb8a81fb235923f8c2ac8bf7f697ec1ad0c760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_347b470af08427b10827a49dc8e1560b02c3f65674fe6ecceaf53eb73695e271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347b470af08427b10827a49dc8e1560b02c3f65674fe6ecceaf53eb73695e271->enter($__internal_347b470af08427b10827a49dc8e1560b02c3f65674fe6ecceaf53eb73695e271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfdc5745e07efb0136ac239a2feb8a81fb235923f8c2ac8bf7f697ec1ad0c760->leave($__internal_cfdc5745e07efb0136ac239a2feb8a81fb235923f8c2ac8bf7f697ec1ad0c760_prof);

        
        $__internal_347b470af08427b10827a49dc8e1560b02c3f65674fe6ecceaf53eb73695e271->leave($__internal_347b470af08427b10827a49dc8e1560b02c3f65674fe6ecceaf53eb73695e271_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aed8e87894a95fec16406a18c1ddbf7fd78952b1e399950b59498d242ad28b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed8e87894a95fec16406a18c1ddbf7fd78952b1e399950b59498d242ad28b09->enter($__internal_aed8e87894a95fec16406a18c1ddbf7fd78952b1e399950b59498d242ad28b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5a0903f6b04a5a043c89f47b4fc4e4353150c18bb8e25ec02a43094459e4ec6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0903f6b04a5a043c89f47b4fc4e4353150c18bb8e25ec02a43094459e4ec6d->enter($__internal_5a0903f6b04a5a043c89f47b4fc4e4353150c18bb8e25ec02a43094459e4ec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a0903f6b04a5a043c89f47b4fc4e4353150c18bb8e25ec02a43094459e4ec6d->leave($__internal_5a0903f6b04a5a043c89f47b4fc4e4353150c18bb8e25ec02a43094459e4ec6d_prof);

        
        $__internal_aed8e87894a95fec16406a18c1ddbf7fd78952b1e399950b59498d242ad28b09->leave($__internal_aed8e87894a95fec16406a18c1ddbf7fd78952b1e399950b59498d242ad28b09_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ab7583a8582bb6a80923ab64e0ff2e425d439c3bb8d181daf1298cd763420bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab7583a8582bb6a80923ab64e0ff2e425d439c3bb8d181daf1298cd763420bc->enter($__internal_4ab7583a8582bb6a80923ab64e0ff2e425d439c3bb8d181daf1298cd763420bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8eb192e20de923158172a212b8f2891f98741034f4c21f9052f5140a99c47165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb192e20de923158172a212b8f2891f98741034f4c21f9052f5140a99c47165->enter($__internal_8eb192e20de923158172a212b8f2891f98741034f4c21f9052f5140a99c47165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8eb192e20de923158172a212b8f2891f98741034f4c21f9052f5140a99c47165->leave($__internal_8eb192e20de923158172a212b8f2891f98741034f4c21f9052f5140a99c47165_prof);

        
        $__internal_4ab7583a8582bb6a80923ab64e0ff2e425d439c3bb8d181daf1298cd763420bc->leave($__internal_4ab7583a8582bb6a80923ab64e0ff2e425d439c3bb8d181daf1298cd763420bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37ce0baff65a5bf8d4083d8b046b52da7de142d2375635ddbbeeb456785dc355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ce0baff65a5bf8d4083d8b046b52da7de142d2375635ddbbeeb456785dc355->enter($__internal_37ce0baff65a5bf8d4083d8b046b52da7de142d2375635ddbbeeb456785dc355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_98476d67329c643758fe875df73352b09bd95a53bf2f2a143b0d826fc0ec90f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98476d67329c643758fe875df73352b09bd95a53bf2f2a143b0d826fc0ec90f5->enter($__internal_98476d67329c643758fe875df73352b09bd95a53bf2f2a143b0d826fc0ec90f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_98476d67329c643758fe875df73352b09bd95a53bf2f2a143b0d826fc0ec90f5->leave($__internal_98476d67329c643758fe875df73352b09bd95a53bf2f2a143b0d826fc0ec90f5_prof);

        
        $__internal_37ce0baff65a5bf8d4083d8b046b52da7de142d2375635ddbbeeb456785dc355->leave($__internal_37ce0baff65a5bf8d4083d8b046b52da7de142d2375635ddbbeeb456785dc355_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar-BackEnd\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
