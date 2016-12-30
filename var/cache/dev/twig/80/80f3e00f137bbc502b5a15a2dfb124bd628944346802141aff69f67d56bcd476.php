<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e830cf4c01f0ac493d66f1327ec99d6fe31b712dcfa3acbc88e3ab62b2ef3d70 extends Twig_Template
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
        $__internal_9ef1fd351c026815c5b7416ddfd2c8c8e87ec5e21927875e754477c06dd8c41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef1fd351c026815c5b7416ddfd2c8c8e87ec5e21927875e754477c06dd8c41e->enter($__internal_9ef1fd351c026815c5b7416ddfd2c8c8e87ec5e21927875e754477c06dd8c41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_573df1cc096ddc858a1bf947e368dce28415d6e4d81c1e6b2d2a02e390444ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573df1cc096ddc858a1bf947e368dce28415d6e4d81c1e6b2d2a02e390444ba0->enter($__internal_573df1cc096ddc858a1bf947e368dce28415d6e4d81c1e6b2d2a02e390444ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9ef1fd351c026815c5b7416ddfd2c8c8e87ec5e21927875e754477c06dd8c41e->leave($__internal_9ef1fd351c026815c5b7416ddfd2c8c8e87ec5e21927875e754477c06dd8c41e_prof);

        
        $__internal_573df1cc096ddc858a1bf947e368dce28415d6e4d81c1e6b2d2a02e390444ba0->leave($__internal_573df1cc096ddc858a1bf947e368dce28415d6e4d81c1e6b2d2a02e390444ba0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
