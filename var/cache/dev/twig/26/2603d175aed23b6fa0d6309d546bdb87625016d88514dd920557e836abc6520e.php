<?php

/* rapport/index.html.twig */
class __TwigTemplate_2db11146e977af8047cbe53c333a53a930e79f8018f3575aa987c88cb70f408c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rapport/index.html.twig", 1);
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
        $__internal_d73befabb25028104912d1720d0e45fe95a7127303eab342fd31204d3f601b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73befabb25028104912d1720d0e45fe95a7127303eab342fd31204d3f601b73->enter($__internal_d73befabb25028104912d1720d0e45fe95a7127303eab342fd31204d3f601b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport/index.html.twig"));

        $__internal_28beb2b181935d4475ab28eae03bb38af564534e7c174cf2557a317bb9851279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28beb2b181935d4475ab28eae03bb38af564534e7c174cf2557a317bb9851279->enter($__internal_28beb2b181935d4475ab28eae03bb38af564534e7c174cf2557a317bb9851279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d73befabb25028104912d1720d0e45fe95a7127303eab342fd31204d3f601b73->leave($__internal_d73befabb25028104912d1720d0e45fe95a7127303eab342fd31204d3f601b73_prof);

        
        $__internal_28beb2b181935d4475ab28eae03bb38af564534e7c174cf2557a317bb9851279->leave($__internal_28beb2b181935d4475ab28eae03bb38af564534e7c174cf2557a317bb9851279_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_676641b82039e7f04348b06a88d970cefb39e193d85a7df1fae1172af5dcb61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676641b82039e7f04348b06a88d970cefb39e193d85a7df1fae1172af5dcb61e->enter($__internal_676641b82039e7f04348b06a88d970cefb39e193d85a7df1fae1172af5dcb61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec20ac4850770d99913a20c3675a5bd41d74e3f0248d09d60321ef153b89134b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec20ac4850770d99913a20c3675a5bd41d74e3f0248d09d60321ef153b89134b->enter($__internal_ec20ac4850770d99913a20c3675a5bd41d74e3f0248d09d60321ef153b89134b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rapports list</h1>

    <table>
        <thead>
            <tr>
                <th>Daterapport</th>
                <th>Totalrapport</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) ? $context["rapports"] : $this->getContext($context, "rapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rapport"], "daterapport", array()), "d/m/Y"), "html", null, true);
            echo "0</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "totalrapport", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_show", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_edit", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_new");
        echo "\">Create a new rapport</a>
        </li>
    </ul>
";
        
        $__internal_ec20ac4850770d99913a20c3675a5bd41d74e3f0248d09d60321ef153b89134b->leave($__internal_ec20ac4850770d99913a20c3675a5bd41d74e3f0248d09d60321ef153b89134b_prof);

        
        $__internal_676641b82039e7f04348b06a88d970cefb39e193d85a7df1fae1172af5dcb61e->leave($__internal_676641b82039e7f04348b06a88d970cefb39e193d85a7df1fae1172af5dcb61e_prof);

    }

    public function getTemplateName()
    {
        return "rapport/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  103 => 33,  91 => 27,  85 => 24,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Rapports list</h1>

    <table>
        <thead>
            <tr>
                <th>Daterapport</th>
                <th>Totalrapport</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for rapport in rapports %}
            <tr>
                <td>{{ rapport.daterapport|date('d/m/Y') }}0</td>
                <td>{{ rapport.totalrapport }}</td>
                <td>{{ rapport.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('rapport_show', { 'id': rapport.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('rapport_edit', { 'id': rapport.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rapport_new') }}\">Create a new rapport</a>
        </li>
    </ul>
{% endblock %}
", "rapport/index.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\rapport\\index.html.twig");
    }
}
