<?php

/* compte/index.html.twig */
class __TwigTemplate_f8cb1975e9c5a38a587dcaf9d57a8fb20dfd8c0feabcfee4a156a44592674451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/index.html.twig", 1);
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
        $__internal_dba1960a96cc073641f5946b60fe15cdab23b876e26ed61e582c58cef218808a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba1960a96cc073641f5946b60fe15cdab23b876e26ed61e582c58cef218808a->enter($__internal_dba1960a96cc073641f5946b60fe15cdab23b876e26ed61e582c58cef218808a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/index.html.twig"));

        $__internal_3c6e2933473f40b1c39e4450b34dd8e86f6057c72bcbf5ce22613a1341449850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6e2933473f40b1c39e4450b34dd8e86f6057c72bcbf5ce22613a1341449850->enter($__internal_3c6e2933473f40b1c39e4450b34dd8e86f6057c72bcbf5ce22613a1341449850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dba1960a96cc073641f5946b60fe15cdab23b876e26ed61e582c58cef218808a->leave($__internal_dba1960a96cc073641f5946b60fe15cdab23b876e26ed61e582c58cef218808a_prof);

        
        $__internal_3c6e2933473f40b1c39e4450b34dd8e86f6057c72bcbf5ce22613a1341449850->leave($__internal_3c6e2933473f40b1c39e4450b34dd8e86f6057c72bcbf5ce22613a1341449850_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bb10bed84fa400f03d08ad1270e17533ef0aac5675a8d7e4ed4d54c3fa3d830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb10bed84fa400f03d08ad1270e17533ef0aac5675a8d7e4ed4d54c3fa3d830->enter($__internal_5bb10bed84fa400f03d08ad1270e17533ef0aac5675a8d7e4ed4d54c3fa3d830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_121d36125f7e1cee92828f63e19c868dd3e25e9e44dfe2edcf4bfdfa1ae0e413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121d36125f7e1cee92828f63e19c868dd3e25e9e44dfe2edcf4bfdfa1ae0e413->enter($__internal_121d36125f7e1cee92828f63e19c868dd3e25e9e44dfe2edcf4bfdfa1ae0e413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comptes list</h1>

    <table>
        <thead>
            <tr>
                <th>Nomprop</th>
                <th>Prenomprop</th>
                <th>Telprop</th>
                <th>Adresseprop</th>
                <th>Mailprop</th>
                <th>Modelevoit</th>
                <th>Marquevoit</th>
                <th>Immatvoit</th>
                <th>Cinprop</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes")));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_show", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "nomprop", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "prenomprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "telprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "adresseprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "mailprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "modelevoit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "marquevoit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "immatvoit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "cinprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_show", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_edit", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_new");
        echo "\">Create a new compte</a>
        </li>
    </ul>
";
        
        $__internal_121d36125f7e1cee92828f63e19c868dd3e25e9e44dfe2edcf4bfdfa1ae0e413->leave($__internal_121d36125f7e1cee92828f63e19c868dd3e25e9e44dfe2edcf4bfdfa1ae0e413_prof);

        
        $__internal_5bb10bed84fa400f03d08ad1270e17533ef0aac5675a8d7e4ed4d54c3fa3d830->leave($__internal_5bb10bed84fa400f03d08ad1270e17533ef0aac5675a8d7e4ed4d54c3fa3d830_prof);

    }

    public function getTemplateName()
    {
        return "compte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  140 => 47,  128 => 41,  122 => 38,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  77 => 25,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Comptes list</h1>

    <table>
        <thead>
            <tr>
                <th>Nomprop</th>
                <th>Prenomprop</th>
                <th>Telprop</th>
                <th>Adresseprop</th>
                <th>Mailprop</th>
                <th>Modelevoit</th>
                <th>Marquevoit</th>
                <th>Immatvoit</th>
                <th>Cinprop</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for compte in comptes %}
            <tr>
                <td><a href=\"{{ path('compte_show', { 'id': compte.id }) }}\">{{ compte.nomprop }}</a></td>
                <td>{{ compte.prenomprop }}</td>
                <td>{{ compte.telprop }}</td>
                <td>{{ compte.adresseprop }}</td>
                <td>{{ compte.mailprop }}</td>
                <td>{{ compte.modelevoit }}</td>
                <td>{{ compte.marquevoit }}</td>
                <td>{{ compte.immatvoit }}</td>
                <td>{{ compte.cinprop }}</td>
                <td>{{ compte.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('compte_show', { 'id': compte.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('compte_edit', { 'id': compte.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('compte_new') }}\">Create a new compte</a>
        </li>
    </ul>
{% endblock %}
", "compte/index.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\compte\\index.html.twig");
    }
}
