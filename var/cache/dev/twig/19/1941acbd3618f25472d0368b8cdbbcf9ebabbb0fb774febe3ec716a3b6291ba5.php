<?php

/* piece/index-manager.html.twig */
class __TwigTemplate_19e47393141af267a6ec43355522611d9cc004a2e57a0ef639249964e7d00912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "piece/index-manager.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_758c22a70e1e2cd2a6e9fb15f70af06d01d2d0980e263c4ec4e665712c54427d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758c22a70e1e2cd2a6e9fb15f70af06d01d2d0980e263c4ec4e665712c54427d->enter($__internal_758c22a70e1e2cd2a6e9fb15f70af06d01d2d0980e263c4ec4e665712c54427d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/index-manager.html.twig"));

        $__internal_11484540628afe0c7cb2f346886955752ce5e5187fc896a6ca344e642417d7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11484540628afe0c7cb2f346886955752ce5e5187fc896a6ca344e642417d7e4->enter($__internal_11484540628afe0c7cb2f346886955752ce5e5187fc896a6ca344e642417d7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/index-manager.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_758c22a70e1e2cd2a6e9fb15f70af06d01d2d0980e263c4ec4e665712c54427d->leave($__internal_758c22a70e1e2cd2a6e9fb15f70af06d01d2d0980e263c4ec4e665712c54427d_prof);

        
        $__internal_11484540628afe0c7cb2f346886955752ce5e5187fc896a6ca344e642417d7e4->leave($__internal_11484540628afe0c7cb2f346886955752ce5e5187fc896a6ca344e642417d7e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60a43f5e3f04d336b20cde762ed49b9c924478eb7ea5122f6b4286930d184cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a43f5e3f04d336b20cde762ed49b9c924478eb7ea5122f6b4286930d184cd8->enter($__internal_60a43f5e3f04d336b20cde762ed49b9c924478eb7ea5122f6b4286930d184cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3db1fa558498df62307bc4d2fcd87685cd656dc613ee9f9f04370f8b2215837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3db1fa558498df62307bc4d2fcd87685cd656dc613ee9f9f04370f8b2215837->enter($__internal_f3db1fa558498df62307bc4d2fcd87685cd656dc613ee9f9f04370f8b2215837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"widget-box\">
          <div class=\"widget-title\"><span class=\"icon\"><i class=\"fa fa-wrench\"></i></span>
            <h5>All Parts</h5>
            <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
              <thead>
                <tr>
                  <th>Reference</th>
                  <th>Brand</th>
                  <th>Price (TND)</th>
                  <th>Type</th>
                  <th>Part Wording</th>
                  <th>Available (Yes/No)</th>
                </tr>
              </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")));
        foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "refpiece", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "marquepiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "prixpiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "typepiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "libellepiece", array()), "html", null, true);
            echo "</td>
                <td><button type=\"button\" class=\"btn btn-success\" disabled><i class=\"fa fa-check\"></i></button> <button type=\"button\" class=\"btn btn-danger\" disabled><i class=\"fa fa-times\"></i></button></td>
               <!--  <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_show", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_edit", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td> -->
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piece'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
</div></div>
";
        
        $__internal_f3db1fa558498df62307bc4d2fcd87685cd656dc613ee9f9f04370f8b2215837->leave($__internal_f3db1fa558498df62307bc4d2fcd87685cd656dc613ee9f9f04370f8b2215837_prof);

        
        $__internal_60a43f5e3f04d336b20cde762ed49b9c924478eb7ea5122f6b4286930d184cd8->leave($__internal_60a43f5e3f04d336b20cde762ed49b9c924478eb7ea5122f6b4286930d184cd8_prof);

    }

    public function getTemplateName()
    {
        return "piece/index-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  109 => 36,  103 => 33,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  76 => 23,  72 => 22,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"widget-box\">
          <div class=\"widget-title\"><span class=\"icon\"><i class=\"fa fa-wrench\"></i></span>
            <h5>All Parts</h5>
            <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"{{ path('piece_new') }}\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
              <thead>
                <tr>
                  <th>Reference</th>
                  <th>Brand</th>
                  <th>Price (TND)</th>
                  <th>Type</th>
                  <th>Part Wording</th>
                  <th>Available (Yes/No)</th>
                </tr>
              </thead>
        <tbody>
        {% for piece in pieces %}
            <tr>
                <td>{{ piece.refpiece }}</a></td>
                <td>{{ piece.marquepiece }}</td>
                <td>{{ piece.prixpiece }}</td>
                <td>{{ piece.typepiece }}</td>
                <td>{{ piece.libellepiece }}</td>
                <td><button type=\"button\" class=\"btn btn-success\" disabled><i class=\"fa fa-check\"></i></button> <button type=\"button\" class=\"btn btn-danger\" disabled><i class=\"fa fa-times\"></i></button></td>
               <!--  <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('piece_show', { 'id': piece.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('piece_edit', { 'id': piece.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td> -->
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div></div>
{% endblock %}
", "piece/index-manager.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\piece\\index-manager.html.twig");
    }
}
