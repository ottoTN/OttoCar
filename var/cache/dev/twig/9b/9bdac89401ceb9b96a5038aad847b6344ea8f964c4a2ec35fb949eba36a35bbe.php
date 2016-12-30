<?php

/* employe/show.html.twig */
class __TwigTemplate_7fd92b9544c334d48fd723b53470df1a6dfae2079b870034c9a0e562fd91273a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employe/show.html.twig", 1);
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
        $__internal_de378ff9963804cdfa35283558bcebc8c173a164234d6239871ebdcfc0450f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de378ff9963804cdfa35283558bcebc8c173a164234d6239871ebdcfc0450f1d->enter($__internal_de378ff9963804cdfa35283558bcebc8c173a164234d6239871ebdcfc0450f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/show.html.twig"));

        $__internal_c55601163e5f458201e65e763be20dc405990ea331588ff264a6e5b682a9a6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55601163e5f458201e65e763be20dc405990ea331588ff264a6e5b682a9a6bd->enter($__internal_c55601163e5f458201e65e763be20dc405990ea331588ff264a6e5b682a9a6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de378ff9963804cdfa35283558bcebc8c173a164234d6239871ebdcfc0450f1d->leave($__internal_de378ff9963804cdfa35283558bcebc8c173a164234d6239871ebdcfc0450f1d_prof);

        
        $__internal_c55601163e5f458201e65e763be20dc405990ea331588ff264a6e5b682a9a6bd->leave($__internal_c55601163e5f458201e65e763be20dc405990ea331588ff264a6e5b682a9a6bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5630d7bbbff552b7fdf438e79f702403453ae8b46e794449cb4b58116a76c34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5630d7bbbff552b7fdf438e79f702403453ae8b46e794449cb4b58116a76c34d->enter($__internal_5630d7bbbff552b7fdf438e79f702403453ae8b46e794449cb4b58116a76c34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42a27bb0d5fcd72ed87c487c824eb33b5cf42d5b9cf6ac5bcfcd7354f0400839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a27bb0d5fcd72ed87c487c824eb33b5cf42d5b9cf6ac5bcfcd7354f0400839->enter($__internal_42a27bb0d5fcd72ed87c487c824eb33b5cf42d5b9cf6ac5bcfcd7354f0400839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employe</h1>

    <table>
        <tbody>
            <tr>
                <th>Cinemp</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "cinemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomemp</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "nomemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenomemp</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "prenomemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Statutsoc</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "statutsoc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresseemp</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "adresseemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datenaissemp</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "datenaissemp", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "datenaissemp", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Telemp</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "telemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typeemp</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "typeemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Salaire</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Statutemp</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "statutemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_edit", array("id" => $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_42a27bb0d5fcd72ed87c487c824eb33b5cf42d5b9cf6ac5bcfcd7354f0400839->leave($__internal_42a27bb0d5fcd72ed87c487c824eb33b5cf42d5b9cf6ac5bcfcd7354f0400839_prof);

        
        $__internal_5630d7bbbff552b7fdf438e79f702403453ae8b46e794449cb4b58116a76c34d->leave($__internal_5630d7bbbff552b7fdf438e79f702403453ae8b46e794449cb4b58116a76c34d_prof);

    }

    public function getTemplateName()
    {
        return "employe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 65,  151 => 63,  145 => 60,  139 => 57,  129 => 50,  122 => 46,  115 => 42,  108 => 38,  101 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Employe</h1>

    <table>
        <tbody>
            <tr>
                <th>Cinemp</th>
                <td>{{ employe.cinemp }}</td>
            </tr>
            <tr>
                <th>Nomemp</th>
                <td>{{ employe.nomemp }}</td>
            </tr>
            <tr>
                <th>Prenomemp</th>
                <td>{{ employe.prenomemp }}</td>
            </tr>
            <tr>
                <th>Statutsoc</th>
                <td>{{ employe.statutsoc }}</td>
            </tr>
            <tr>
                <th>Adresseemp</th>
                <td>{{ employe.adresseemp }}</td>
            </tr>
            <tr>
                <th>Datenaissemp</th>
                <td>{% if employe.datenaissemp %}{{ employe.datenaissemp|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Telemp</th>
                <td>{{ employe.telemp }}</td>
            </tr>
            <tr>
                <th>Typeemp</th>
                <td>{{ employe.typeemp }}</td>
            </tr>
            <tr>
                <th>Salaire</th>
                <td>{{ employe.salaire }}</td>
            </tr>
            <tr>
                <th>Statutemp</th>
                <td>{{ employe.statutemp }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ employe.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('employe_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('employe_edit', { 'id': employe.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "employe/show.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\employe\\show.html.twig");
    }
}
