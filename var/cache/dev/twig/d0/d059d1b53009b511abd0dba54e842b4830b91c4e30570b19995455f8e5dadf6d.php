<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2a93f756df4143690005d9e0150dd64a92fa4437e0dacd27ae621d1fa7b3fbf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91869e7087b3ee4ff6c698cc8dd358bb204c7933a7fb49054ad5a2d77ede24c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91869e7087b3ee4ff6c698cc8dd358bb204c7933a7fb49054ad5a2d77ede24c9->enter($__internal_91869e7087b3ee4ff6c698cc8dd358bb204c7933a7fb49054ad5a2d77ede24c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_50c9c788d8dbbaa00e703fbea3d487ced32c0447d4bb482626b95d47b82fe7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c9c788d8dbbaa00e703fbea3d487ced32c0447d4bb482626b95d47b82fe7e2->enter($__internal_50c9c788d8dbbaa00e703fbea3d487ced32c0447d4bb482626b95d47b82fe7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91869e7087b3ee4ff6c698cc8dd358bb204c7933a7fb49054ad5a2d77ede24c9->leave($__internal_91869e7087b3ee4ff6c698cc8dd358bb204c7933a7fb49054ad5a2d77ede24c9_prof);

        
        $__internal_50c9c788d8dbbaa00e703fbea3d487ced32c0447d4bb482626b95d47b82fe7e2->leave($__internal_50c9c788d8dbbaa00e703fbea3d487ced32c0447d4bb482626b95d47b82fe7e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f43d2b4df2ce41c4ff56a84bdb20b3b7d26eb5751386f3b672d23c4ccf834a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43d2b4df2ce41c4ff56a84bdb20b3b7d26eb5751386f3b672d23c4ccf834a8c->enter($__internal_f43d2b4df2ce41c4ff56a84bdb20b3b7d26eb5751386f3b672d23c4ccf834a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59d0d84210d845131f72e244dc58256774bb2007b74d7ef8051879e4d37e77d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d0d84210d845131f72e244dc58256774bb2007b74d7ef8051879e4d37e77d3->enter($__internal_59d0d84210d845131f72e244dc58256774bb2007b74d7ef8051879e4d37e77d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_59d0d84210d845131f72e244dc58256774bb2007b74d7ef8051879e4d37e77d3->leave($__internal_59d0d84210d845131f72e244dc58256774bb2007b74d7ef8051879e4d37e77d3_prof);

        
        $__internal_f43d2b4df2ce41c4ff56a84bdb20b3b7d26eb5751386f3b672d23c4ccf834a8c->leave($__internal_f43d2b4df2ce41c4ff56a84bdb20b3b7d26eb5751386f3b672d23c4ccf834a8c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Admin\\Desktop\\OTTOCar-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
