<?php

/* employe/index.html.twig */
class __TwigTemplate_644309e3de2c815d9e48d67f2e0d6d7e2d846cbe6c781a391f5d0b9e6164d98f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employe/index.html.twig", 1);
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
        $__internal_812bcc1631d6bbc2016730111500b280726d462565eaaecb4b541fff78bdb192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812bcc1631d6bbc2016730111500b280726d462565eaaecb4b541fff78bdb192->enter($__internal_812bcc1631d6bbc2016730111500b280726d462565eaaecb4b541fff78bdb192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        $__internal_86c591f76a1d4ae638f51c6e5dd9312561d0e00d8824a1215c2684dc571e9ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c591f76a1d4ae638f51c6e5dd9312561d0e00d8824a1215c2684dc571e9ace->enter($__internal_86c591f76a1d4ae638f51c6e5dd9312561d0e00d8824a1215c2684dc571e9ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812bcc1631d6bbc2016730111500b280726d462565eaaecb4b541fff78bdb192->leave($__internal_812bcc1631d6bbc2016730111500b280726d462565eaaecb4b541fff78bdb192_prof);

        
        $__internal_86c591f76a1d4ae638f51c6e5dd9312561d0e00d8824a1215c2684dc571e9ace->leave($__internal_86c591f76a1d4ae638f51c6e5dd9312561d0e00d8824a1215c2684dc571e9ace_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d96fe2236e183d0ce785f9dbd1aa8d59aad356575990c7642754f42e1a9db17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96fe2236e183d0ce785f9dbd1aa8d59aad356575990c7642754f42e1a9db17e->enter($__internal_d96fe2236e183d0ce785f9dbd1aa8d59aad356575990c7642754f42e1a9db17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07442e73325688c0eb0c4cd06988cc880a8a8860d0bf3260ac8a9be5c6b20a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07442e73325688c0eb0c4cd06988cc880a8a8860d0bf3260ac8a9be5c6b20a0f->enter($__internal_07442e73325688c0eb0c4cd06988cc880a8a8860d0bf3260ac8a9be5c6b20a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employes list</h1>

    <table>
        <thead>
            <tr>
                <th>Cinemp</th>
                <th>Nomemp</th>
                <th>Prenomemp</th>
                <th>Statutsoc</th>
                <th>Adresseemp</th>
                <th>Datenaissemp</th>
                <th>Telemp</th>
                <th>Typeemp</th>
                <th>Salaire</th>
                <th>Statutemp</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employes"]) ? $context["employes"] : $this->getContext($context, "employes")));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_show", array("id" => $this->getAttribute($context["employe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "cinemp", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "nomemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "prenomemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "statutsoc", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "adresseemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["employe"], "datenaissemp", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["employe"], "datenaissemp", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "telemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "typeemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "salaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "statutemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_show", array("id" => $this->getAttribute($context["employe"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_edit", array("id" => $this->getAttribute($context["employe"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_new");
        echo "\">Create a new employe</a>
        </li>
    </ul>
";
        
        $__internal_07442e73325688c0eb0c4cd06988cc880a8a8860d0bf3260ac8a9be5c6b20a0f->leave($__internal_07442e73325688c0eb0c4cd06988cc880a8a8860d0bf3260ac8a9be5c6b20a0f_prof);

        
        $__internal_d96fe2236e183d0ce785f9dbd1aa8d59aad356575990c7642754f42e1a9db17e->leave($__internal_d96fe2236e183d0ce785f9dbd1aa8d59aad356575990c7642754f42e1a9db17e_prof);

    }

    public function getTemplateName()
    {
        return "employe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  147 => 49,  135 => 43,  129 => 40,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  78 => 26,  75 => 25,  71 => 24,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Employes list</h1>

    <table>
        <thead>
            <tr>
                <th>Cinemp</th>
                <th>Nomemp</th>
                <th>Prenomemp</th>
                <th>Statutsoc</th>
                <th>Adresseemp</th>
                <th>Datenaissemp</th>
                <th>Telemp</th>
                <th>Typeemp</th>
                <th>Salaire</th>
                <th>Statutemp</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for employe in employes %}
            <tr>
                <td><a href=\"{{ path('employe_show', { 'id': employe.id }) }}\">{{ employe.cinemp }}</a></td>
                <td>{{ employe.nomemp }}</td>
                <td>{{ employe.prenomemp }}</td>
                <td>{{ employe.statutsoc }}</td>
                <td>{{ employe.adresseemp }}</td>
                <td>{% if employe.datenaissemp %}{{ employe.datenaissemp|date('Y-m-d') }}{% endif %}</td>
                <td>{{ employe.telemp }}</td>
                <td>{{ employe.typeemp }}</td>
                <td>{{ employe.salaire }}</td>
                <td>{{ employe.statutemp }}</td>
                <td>{{ employe.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('employe_show', { 'id': employe.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('employe_edit', { 'id': employe.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('employe_new') }}\">Create a new employe</a>
        </li>
    </ul>
{% endblock %}
", "employe/index.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\employe\\index.html.twig");
    }
}
