<?php

/* facture/index.html.twig */
class __TwigTemplate_90ce3b6daf61fe1f685911355dbcb1df0df80c5f9340668ff9dd04cab0cd1e59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "facture/index.html.twig", 1);
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
        $__internal_a33744f11e7aa552544f2b6f6bf2cc7fa36165270470ec45bb14e39be20423e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33744f11e7aa552544f2b6f6bf2cc7fa36165270470ec45bb14e39be20423e4->enter($__internal_a33744f11e7aa552544f2b6f6bf2cc7fa36165270470ec45bb14e39be20423e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $__internal_5e8fb810eacd32dc97d4de001b670c332059967fb3cd6ddc21b317682f7edcda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8fb810eacd32dc97d4de001b670c332059967fb3cd6ddc21b317682f7edcda->enter($__internal_5e8fb810eacd32dc97d4de001b670c332059967fb3cd6ddc21b317682f7edcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a33744f11e7aa552544f2b6f6bf2cc7fa36165270470ec45bb14e39be20423e4->leave($__internal_a33744f11e7aa552544f2b6f6bf2cc7fa36165270470ec45bb14e39be20423e4_prof);

        
        $__internal_5e8fb810eacd32dc97d4de001b670c332059967fb3cd6ddc21b317682f7edcda->leave($__internal_5e8fb810eacd32dc97d4de001b670c332059967fb3cd6ddc21b317682f7edcda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6303a39b27efb30f9f66fbef04d1384ae53adbf4b07e08c0c90625334b983f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6303a39b27efb30f9f66fbef04d1384ae53adbf4b07e08c0c90625334b983f8->enter($__internal_b6303a39b27efb30f9f66fbef04d1384ae53adbf4b07e08c0c90625334b983f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_230bfe65deb89730debd1afb22658a21e79f607554a906a8d5a5035e71463494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230bfe65deb89730debd1afb22658a21e79f607554a906a8d5a5035e71463494->enter($__internal_230bfe65deb89730debd1afb22658a21e79f607554a906a8d5a5035e71463494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Factures list</h1>

    <table>
        <thead>
            <tr>
                <th>Tariffacture</th>
                <th>Statutfacture</th>
                <th>Piece</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_show", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "tariffacture", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "statutfacture", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "Piece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_show", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_edit", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_new");
        echo "\">Create a new facture</a>
        </li>
    </ul>
";
        
        $__internal_230bfe65deb89730debd1afb22658a21e79f607554a906a8d5a5035e71463494->leave($__internal_230bfe65deb89730debd1afb22658a21e79f607554a906a8d5a5035e71463494_prof);

        
        $__internal_b6303a39b27efb30f9f66fbef04d1384ae53adbf4b07e08c0c90625334b983f8->leave($__internal_b6303a39b27efb30f9f66fbef04d1384ae53adbf4b07e08c0c90625334b983f8_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Factures list</h1>

    <table>
        <thead>
            <tr>
                <th>Tariffacture</th>
                <th>Statutfacture</th>
                <th>Piece</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for facture in factures %}
            <tr>
                <td><a href=\"{{ path('facture_show', { 'id': facture.id }) }}\">{{ facture.tariffacture }}</a></td>
                <td>{{ facture.statutfacture }}</td>
                <td>{{ facture.Piece }}</td>
                <td>{{ facture.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('facture_show', { 'id': facture.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('facture_edit', { 'id': facture.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('facture_new') }}\">Create a new facture</a>
        </li>
    </ul>
{% endblock %}
", "facture/index.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\facture\\index.html.twig");
    }
}
