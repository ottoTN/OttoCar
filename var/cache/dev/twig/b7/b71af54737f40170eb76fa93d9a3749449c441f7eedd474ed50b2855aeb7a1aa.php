<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8df3f08baf1b93faf40b14d0a1b92ba7fde1f7210aa8d161721cef210b5c4097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ec1a2a67a07c395cb9651e6a49d0c3cf5e09f857abb1aa95907014f11b32885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec1a2a67a07c395cb9651e6a49d0c3cf5e09f857abb1aa95907014f11b32885->enter($__internal_4ec1a2a67a07c395cb9651e6a49d0c3cf5e09f857abb1aa95907014f11b32885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b50214030d827840a5ce5972c4e1140b06b6c03a4426161d4e6b67b8cc8f1d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50214030d827840a5ce5972c4e1140b06b6c03a4426161d4e6b67b8cc8f1d40->enter($__internal_b50214030d827840a5ce5972c4e1140b06b6c03a4426161d4e6b67b8cc8f1d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4ec1a2a67a07c395cb9651e6a49d0c3cf5e09f857abb1aa95907014f11b32885->leave($__internal_4ec1a2a67a07c395cb9651e6a49d0c3cf5e09f857abb1aa95907014f11b32885_prof);

        
        $__internal_b50214030d827840a5ce5972c4e1140b06b6c03a4426161d4e6b67b8cc8f1d40->leave($__internal_b50214030d827840a5ce5972c4e1140b06b6c03a4426161d4e6b67b8cc8f1d40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
