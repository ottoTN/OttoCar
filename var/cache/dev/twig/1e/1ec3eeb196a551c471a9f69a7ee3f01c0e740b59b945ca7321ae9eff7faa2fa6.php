<?php

/* fiche/show.html.twig */
class __TwigTemplate_6128d5abd1bd98f67183e9a639a139ac6695a4a5db770531d9302505eb180eba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/show.html.twig", 1);
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
        $__internal_fbcac90fb38a2888aa6a8ad433f8a37591ea340a1649469f6596e66abbf28785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcac90fb38a2888aa6a8ad433f8a37591ea340a1649469f6596e66abbf28785->enter($__internal_fbcac90fb38a2888aa6a8ad433f8a37591ea340a1649469f6596e66abbf28785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/show.html.twig"));

        $__internal_118fd2f311808bfead0f6f708c432fc189eb495d9d930da05ad2a96b1ee96d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118fd2f311808bfead0f6f708c432fc189eb495d9d930da05ad2a96b1ee96d03->enter($__internal_118fd2f311808bfead0f6f708c432fc189eb495d9d930da05ad2a96b1ee96d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbcac90fb38a2888aa6a8ad433f8a37591ea340a1649469f6596e66abbf28785->leave($__internal_fbcac90fb38a2888aa6a8ad433f8a37591ea340a1649469f6596e66abbf28785_prof);

        
        $__internal_118fd2f311808bfead0f6f708c432fc189eb495d9d930da05ad2a96b1ee96d03->leave($__internal_118fd2f311808bfead0f6f708c432fc189eb495d9d930da05ad2a96b1ee96d03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d342c1b436d1e0c8be4bf63d53765269cda384fdf150f2f599561c764560896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d342c1b436d1e0c8be4bf63d53765269cda384fdf150f2f599561c764560896->enter($__internal_9d342c1b436d1e0c8be4bf63d53765269cda384fdf150f2f599561c764560896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a07fdc49eed8a1d5087ac4ed6fe52917dc0d349a80db8656f715bd9a58fef96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a07fdc49eed8a1d5087ac4ed6fe52917dc0d349a80db8656f715bd9a58fef96->enter($__internal_9a07fdc49eed8a1d5087ac4ed6fe52917dc0d349a80db8656f715bd9a58fef96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche</h1>

    <table>
        <tbody>
            <tr>
                <th>Datefiche</th>
                <td>";
        // line 10
        if ($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "datefiche", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "datefiche", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Prestation</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "prestation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Client</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "Client", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Emp</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "Emp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Diagfiche</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "diagfiche", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Solutionfiche</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "solutionfiche", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typereparation</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "typereparation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Statutfiche</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "statutfiche", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9a07fdc49eed8a1d5087ac4ed6fe52917dc0d349a80db8656f715bd9a58fef96->leave($__internal_9a07fdc49eed8a1d5087ac4ed6fe52917dc0d349a80db8656f715bd9a58fef96_prof);

        
        $__internal_9d342c1b436d1e0c8be4bf63d53765269cda384fdf150f2f599561c764560896->leave($__internal_9d342c1b436d1e0c8be4bf63d53765269cda384fdf150f2f599561c764560896_prof);

    }

    public function getTemplateName()
    {
        return "fiche/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 57,  137 => 55,  131 => 52,  125 => 49,  115 => 42,  108 => 38,  101 => 34,  94 => 30,  87 => 26,  80 => 22,  73 => 18,  66 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fiche</h1>

    <table>
        <tbody>
            <tr>
                <th>Datefiche</th>
                <td>{% if fiche.datefiche %}{{ fiche.datefiche|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Prestation</th>
                <td>{{ fiche.prestation }}</td>
            </tr>
            <tr>
                <th>Client</th>
                <td>{{ fiche.Client }}</td>
            </tr>
            <tr>
                <th>Emp</th>
                <td>{{ fiche.Emp }}</td>
            </tr>
            <tr>
                <th>Diagfiche</th>
                <td>{{ fiche.diagfiche }}</td>
            </tr>
            <tr>
                <th>Solutionfiche</th>
                <td>{{ fiche.solutionfiche }}</td>
            </tr>
            <tr>
                <th>Typereparation</th>
                <td>{{ fiche.typereparation }}</td>
            </tr>
            <tr>
                <th>Statutfiche</th>
                <td>{{ fiche.statutfiche }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ fiche.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fiche_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "fiche/show.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\fiche\\show.html.twig");
    }
}
