<?php

/* fiche/index.html.twig */
class __TwigTemplate_a6252c5b99f5f64d5f815dfdf49ed7bbeeb43b087fea648253d2da02c4aaa78b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/index.html.twig", 1);
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
        $__internal_9be2df486757cfde417cffc87ae451b97feaafbff2ca67759a1205a9d8d24c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be2df486757cfde417cffc87ae451b97feaafbff2ca67759a1205a9d8d24c66->enter($__internal_9be2df486757cfde417cffc87ae451b97feaafbff2ca67759a1205a9d8d24c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index.html.twig"));

        $__internal_b58137008e2ffca8adbd04c9fb0d8847b32f8fa97a4fd5ff06eb5d3316cd3d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58137008e2ffca8adbd04c9fb0d8847b32f8fa97a4fd5ff06eb5d3316cd3d72->enter($__internal_b58137008e2ffca8adbd04c9fb0d8847b32f8fa97a4fd5ff06eb5d3316cd3d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be2df486757cfde417cffc87ae451b97feaafbff2ca67759a1205a9d8d24c66->leave($__internal_9be2df486757cfde417cffc87ae451b97feaafbff2ca67759a1205a9d8d24c66_prof);

        
        $__internal_b58137008e2ffca8adbd04c9fb0d8847b32f8fa97a4fd5ff06eb5d3316cd3d72->leave($__internal_b58137008e2ffca8adbd04c9fb0d8847b32f8fa97a4fd5ff06eb5d3316cd3d72_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87cecb0aab9381930e7fe8094f037cb1a8e2a2be6f6b8cae5139938919c06634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87cecb0aab9381930e7fe8094f037cb1a8e2a2be6f6b8cae5139938919c06634->enter($__internal_87cecb0aab9381930e7fe8094f037cb1a8e2a2be6f6b8cae5139938919c06634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b73ea2632ca3c303e6a63269563e02715f93137d8b2b32af202cbfc3ebfc9b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73ea2632ca3c303e6a63269563e02715f93137d8b2b32af202cbfc3ebfc9b4b->enter($__internal_b73ea2632ca3c303e6a63269563e02715f93137d8b2b32af202cbfc3ebfc9b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiches list</h1>

    <table>
        <thead>
            <tr>
                <th>Datefiche</th>
                <th>Prestation</th>
                <th>Client</th>
                <th>Emp</th>
                <th>Diagfiche</th>
                <th>Solutionfiche</th>
                <th>Typereparation</th>
                <th>Statutfiche</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datefiche", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "prestation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Client", array()), "prenomprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Emp", array()), "prenomemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "diagfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "solutionfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "typereparation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "statutfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_new");
        echo "\">Create a new fiche</a>
        </li>
    </ul>
";
        
        $__internal_b73ea2632ca3c303e6a63269563e02715f93137d8b2b32af202cbfc3ebfc9b4b->leave($__internal_b73ea2632ca3c303e6a63269563e02715f93137d8b2b32af202cbfc3ebfc9b4b_prof);

        
        $__internal_87cecb0aab9381930e7fe8094f037cb1a8e2a2be6f6b8cae5139938919c06634->leave($__internal_87cecb0aab9381930e7fe8094f037cb1a8e2a2be6f6b8cae5139938919c06634_prof);

    }

    public function getTemplateName()
    {
        return "fiche/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  135 => 45,  123 => 39,  117 => 36,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fiches list</h1>

    <table>
        <thead>
            <tr>
                <th>Datefiche</th>
                <th>Prestation</th>
                <th>Client</th>
                <th>Emp</th>
                <th>Diagfiche</th>
                <th>Solutionfiche</th>
                <th>Typereparation</th>
                <th>Statutfiche</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fiche in fiches %}
            <tr>
                <td><a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">{{ fiche.datefiche|date('Y-m-d H:i:s') }}</a></td>
                <td>{{ fiche.prestation }}</td>
                <td>{{ fiche.Client.prenomprop }}</td>
                <td>{{ fiche.Emp.prenomemp }}</td>
                <td>{{ fiche.diagfiche }}</td>
                <td>{{ fiche.solutionfiche }}</td>
                <td>{{ fiche.typereparation }}</td>
                <td>{{ fiche.statutfiche }}</td>
                <td>{{ fiche.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fiche_new') }}\">Create a new fiche</a>
        </li>
    </ul>
{% endblock %}
", "fiche/index.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\fiche\\index.html.twig");
    }
}
